<?php

namespace App\Jobs;

use App\Models\Order;
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
        $order = Order::find($this->orderId);
        

        // Check if the order exists
        if ($order) {
            // Check if the payment method is not cash and the order status is initiated
            if ($order->status == 'initiated' || $order->status == 'pending') {
                try {
                    // Call the rollbackStock method
                    $this->rollbackStock($order);
                } catch (\Exception $e) {
                    // Handle exceptions (e.g., log or notify administrators)
                    \Log::error('Error occurred during CheckOrderStatus job: ' . $e->getMessage());
                }
            }
        }
    }

    protected function rollbackStock($order)
    {
        // Retrieve the order items and sum the quantities
        $orderItemQuantities = OrderItem::where('order_id', $order->id)
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

        if($order->status == 'initiated') {

         // Delete all order items associated with the order
         OrderItem::where('order_id', $order->id)->delete();

         // Delete the order
         $order->delete();

        //  dd('hi');
        } else {
            // change the order status to cancelled
            $order->status = 'canceled';
            $order->save();
        }
    }

}
