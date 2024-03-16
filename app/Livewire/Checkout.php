<?php

namespace App\Livewire;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

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



    public function save() {
        $userId = Auth::id();

        $address = Address::firstOrCreate(
            ['user_id' => $userId],
            [
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'city' => $this->city,
                'state' => $this->state,
                'zip_code' => $this->zipCode,
                'country' => $this->country,
                'phone' => $this->phone,
            ]
        );


        // Create order
        $order = Order::create([
            'address_id' => $address->id,
            'payment_method' => $this->paymentMethod,
            'subtotal' => $this->subtotal,
            'tax' => $this->tax,
            'shipping' => $this->shipping,
            'total' => $this->total,
        ]);

        // Create order items
        foreach ($this->cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // If payment method is not cash, display message
        if ($this->paymentMethod !== 'cash') {
            session()->flash('message', 'We only accept cash right now.');
        } else {
            // Clear the cart after successful order
            session()->forget('cart');
            session()->flash('success', 'Order placed successfully!');
        }
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
