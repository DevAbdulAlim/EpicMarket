<?php

namespace App\Jobs;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class CheckOrderStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $cartId;
    public function __construct($cartId)
    {
        $this->cartId = $cartId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->rollbackStock($this->cartId);
    }

    protected function rollbackStock($cartId)
    {
        // Retrieve the cart items
        $cartItems = CartItem::where('cart_id', $cartId)
            ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->get();

        // Prepare data for bulk update
        $updateData = [];
        foreach ($cartItems as $cartItem) {
            $productId = $cartItem->product_id;
            $totalQuantity = $cartItem->total_quantity;
            $updateData[$productId] = $totalQuantity;
        }

        // Construct the SQL query for bulk update
        $caseStatements = '';
        foreach ($updateData as $productId => $quantity) {
            $caseStatements .= "WHEN $productId THEN stock + $quantity ";
        }

        // Bulk update the stock
        $sql = "UPDATE products SET stock = CASE id $caseStatements END WHERE id IN (" . implode(',', array_keys($updateData)) . ")";
        DB::update($sql);

        // Delete the cart items
        CartItem::where('cart_id', $cartId)->delete();

        dd('hi');
    }



}
