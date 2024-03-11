<?php

namespace App\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];
    public $cartOpen = false;
    public $totalItems = 0;

    protected $listeners = ['productAddedToCart' => 'refreshCart'];

    public function mount() {
        $this->refreshCart();
        $this->calculateTotalItems();
    }

    public function removeFromCart($productId) {
        unset($this->cart[$productId]);
        session()->put('cart', $this->cart);
        $this->refreshCart();
        $this->calculateTotalItems();
    }

    public function increaseQuantity($productId) {
        $this->cart[$productId]['quantity']++;
        session()->put('cart', $this->cart);
        $this->refreshCart();
        $this->calculateTotalItems();
    }

    public function decreaseQuantity($productId) {
        if($this->cart[$productId]['quantity'] > 1) {
            $this->cart[$productId]['quantity']--;
            session()->put('cart', $this->cart);
            $this->refreshCart();
            $this->calculateTotalItems();
        }
    }

    public function refreshCart() {
        $this->cart = session()->get('cart', []);
        $this->calculateTotalItems();
        $this->openCart();
    }

    public function openCart() {
        $this->cartOpen = true;
    }

    public function closeCart() {
        $this->cartOpen = false;
    }

    public function calculateTotalItems() {
        $this->totalItems = array_sum(array_column($this->cart, 'quantity'));
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}