<?php

namespace App\Livewire;

use Livewire\Component;

class AddToCartButton extends Component
{
    public $productId;
    public $productName;
    public $productImage;
    public $productPrice;
    public $productStock;

    public function mount($productId, $productName, $productImage, $productPrice, $productStock)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productImage = $productImage;
        $this->productPrice = $productPrice;
        $this->productStock = $productStock;
    }

    public function addToCart() {
        // Retrieve cart data from session
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if(isset($cart[$this->productId])) {
            // Increment the quantity if the product is already in the cart
            $cart[$this->productId]['quantity']++;
        } else {
            // Add the product to the cart with its details if it's not already in the cart
            $cart[$this->productId] = [
                'product_id' => $this->productId,
                'name' => $this->productName,
                'image' => $this->productImage,
                'price' => $this->productPrice,
                'stock' => $this->productStock,
                'quantity' => 1
            ];
        }

        // Store updated cart data in session
        session()->put('cart', $cart);

        // Emit an event to indicate that the product was added to the cart
        $this->dispatch('productAddedToCart');
    }

    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}