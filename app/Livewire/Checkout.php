<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    // Shipping Address
    public $firstName = '';
    public $lastName = '';
    public $address1 = '';
    public $address2 = '';
    public $city = '';
    public $state = '';
    public $zipCode = '';
    public $country = '';
    public $phone = '';


    // Payment Method
    public $paymentMethod = '';

    public $cart = [];
    public $tax = 0.03;
    public $shipping = 30;
    public $subtotal = 0;
    public $total = 0;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        $this->calculateSubtotal();
        $this->calculateTotal();
    }

    public function calculateSubtotal() {
        $this->subtotal = collect($this->cart)->reduce(function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        });
    }

    public function calculateTotal() {
        $this->tax = $this->subtotal * $this->tax;
        $this->total = $this->subtotal + $this->tax + $this->shipping;

    }

    public function render()
    {
        return view('livewire.checkout');
    }
}