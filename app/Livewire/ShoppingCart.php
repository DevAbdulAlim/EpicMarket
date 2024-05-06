<?php

namespace App\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $title;
    public $cart = [];
    public $open = false;
    public $totalItems = 0;
    public $totalPrice = 0;

    protected $listeners = ['productAddedToCart' => 'cartAddListener'];

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
        // Check if the product exists in the cart
        if (isset($this->cart[$productId])) {
            $product = $this->cart[$productId];
            $stock = $product['stock'];

            // Check if the quantity does not exceed the available stock
            if ($product['quantity'] < $stock) {
                // Increase the quantity
                $this->cart[$productId]['quantity']++;
                session()->put('cart', $this->cart);
                $this->refreshCart();
                $this->calculateTotalItems();
            } else {
                // Flash a message indicating that the quantity cannot be increased further
                session()->flash('error', 'Stock limit exceeded.');
            }
        }
    }

    public function decreaseQuantity($productId) {
        if($this->cart[$productId]['quantity'] > 1) {
            $this->cart[$productId]['quantity']--;
            session()->put('cart', $this->cart);
            $this->refreshCart();
            $this->calculateTotalItems();
        }
    }

    public function cartAddListener () {
        $this->refreshCart();
        $this->open = true;
    }

    public function refreshCart() {
        $this->cart = session()->get('cart', []);
        $this->calculateTotalItems();
        $this->calculateTotalPrice();
    }

    public function calculateTotalItems() {
        $this->totalItems = array_sum(array_column($this->cart, 'quantity'));
    }

    public function calculateTotalPrice() {
        $this->totalPrice = collect($this->cart)->reduce(function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        });
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
