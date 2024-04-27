<?php

namespace App\Jobs;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class CheckOrderStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $orderId;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $this->rollbackStock($this->orderId);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log or notify administrators)
            \Log::error('Error occurred during CheckOrderStatus job: ' . $e->getMessage());
        }
    }

    protected function rollbackStock($orderId)
    {
        // Retrieve the order items and sum the quantities
        $orderItemQuantities = OrderItem::where('order_id', $orderId)
            ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->pluck('total_quantity', 'product_id');

        // Convert the collection to an array
        $orderItemQuantitiesArray = $orderItemQuantities->toArray();

        // Construct the SQL query for bulk update
        $caseStatements = '';
        foreach ($orderItemQuantitiesArray as $productId => $quantity) {
            // Ensure $quantity is treated as a string
            $quantity = (string) $quantity;
            $caseStatements .= "WHEN $productId THEN stock + $quantity ";
        }

        // Bulk update the product stock
        $sql = "UPDATE products SET stock = CASE id $caseStatements END WHERE id IN (" . implode(',', array_keys($orderItemQuantitiesArray)) . ")";
        DB::update($sql);

        // Delete all order items associated with the order
        OrderItem::where('order_id', $orderId)->delete();
    }

}
