<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}