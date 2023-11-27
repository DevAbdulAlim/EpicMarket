<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cartItems = [
        1 => ['id' => 1, 'name' => 'Product A', 'description' => 'Lorem ipsum', 'image' => 'product1.jpg', 'price' => 29.99, 'quantity' => 1],
        2 => ['id' => 2, 'name' => 'Product B', 'description' => 'Dolor sit amet', 'image' => 'product2.jpg', 'price' => 39.99, 'quantity' => 1],
        // Add more items as needed
    ];

    public $totalItems = 0;
    public $totalPrice = 0.00;

    public function mount()
    {
        $this->calculateTotal();
    }

    public function removeFromCart($productId)
    {
        unset($this->cartItems[$productId]);
        $this->calculateTotal();
    }

    public function updateQuantity($productId)
    {
        // Validate the input
        $this->validate([
            'cartItems.'.$productId.'.quantity' => 'required|numeric|min:1',
        ]);

        // Recalculate total items and price
        $this->calculateTotal();

        // Clear any validation errors
        $this->resetValidation();
    }

    private function calculateTotal()
    {
        $this->totalItems = count($this->cartItems);
        $this->totalPrice = array_sum(array_column($this->cartItems, 'price'));
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
