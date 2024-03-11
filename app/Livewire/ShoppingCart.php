<?php

namespace App\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];

    protected $listeners = ['productAddedToCart' => 'refreshCart'];

    public function mount() {
        $this->refreshCart();
    }

    public function removeFromCart($productId) {
        unset($this->cart[$productId]);
        session()->put('cart', $this->cart);
        $this->refreshCart();
    }

    public function increaseQuantity($productId) {
        $this->cart[$productId]++;
        session()->put('cart', $this->cart);
        $this->refreshCart();
    }

    public function decreaseQuantity($productId) {
        if($this->cart[$productId] > 1) {
            $this->cart[$productId]--;
            session()->put('cart', $this->cart);
            $this->refreshCart();
        }
    }

    public function refreshCart() {
        $this->cart = session()->get('cart', []);
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
