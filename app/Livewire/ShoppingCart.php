<?php

namespace App\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];

    protected $listeners = ['productAddedToCart' => 'refreshCart'];

    public function refreshCart() {
        $this->cart = session()->get('cart', []);
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
