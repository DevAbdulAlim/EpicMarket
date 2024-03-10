<?php

namespace App\Livewire;

use Livewire\Component;

class AddToCartButton extends Component
{
    public $productId;

    public function addToCart() {
        // Retrieve cart data from session
        $cart = session()->get('cart', []);

        // Add the product to the cart
        $cart[$this->productId] = isset($cart[$this->productId]) ? $cart[$this->productId] + 1: 1;

        // Store updated cart data in session
        session()->put('cart', $cart);

        // Emit an event to indicate that the product was added to the $cart
        $this->dispatch('productAddedToCart');

    }
    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}
