<?php

namespace App\Livewire;

use App\Jobs\CheckOrderStatus;
use App\Models\Address;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Events\OrderPlaced;

class Checkout extends Component
{

    public $errors;
    public $stockAvailable;

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

    public $order_id; // database order id to store in the order for tracking order

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        if (empty($this->cart)) {
            // Redirect to the home page
            return Redirect::route('home');
        }
        $this->calculateSubtotal();
        $this->calculateTotal();
        $this->checkAvailability();
        if ($this->stockAvailable) {
            $this->recordStock();
        }
    }

    public function recordStock()
    {
        $userId = auth()->id();

        // Start a database transaction
        DB::beginTransaction();

        try {
            // Retrieve all cart items
            $cartItems = $this->cart;

            // Retrieve all product IDs from the cart items
            $productIds = array_column($cartItems, 'product_id');

            // Retrieve the quantities for all products
            $productQuantities = [];
            foreach ($cartItems as $item) {
                $productQuantities[$item['product_id']] = $item['quantity'];
            }

            // Retrieve all products to update
            $productsToUpdate = Product::whereIn('id', $productIds)->get();

            // Prepare the bulk update array
            $bulkUpdateArray = [];
            foreach ($productsToUpdate as $product) {
                $productId = $product->id;
                $quantity = $productQuantities[$productId] ?? 0; // Get quantity from cart items

                // Calculate the new stock value
                $newStock = max(0, $product->stock - $quantity); // Ensure stock doesn't go below 0

                // Add product ID and new stock value to bulk update array
                $bulkUpdateArray[$productId] = $newStock;
            }

            // Perform bulk update for all products
            Product::whereIn('id', array_keys($bulkUpdateArray))->update([
                'stock' => DB::raw('CASE id ' . implode(' ', array_map(function ($productId, $newStock) {
                    return "WHEN $productId THEN $newStock ";
                }, array_keys($bulkUpdateArray), $bulkUpdateArray)) . ' END')
            ]);


            // create empty order
            $order = Order::create([
                'user_id' => $userId,
            ]);

            // store order id for further processing
            $this->order_id = $order->id;


            // Prepare data for order items insertion
            $orderItemsData = [];
            foreach ($this->cart as $item) {
                $orderItemsData[] = [
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ];
            }

            // Insert all the order items to the CartItem
            OrderItem::insert($orderItemsData);

            // Dispatch the job to rollback stock if checkout failed
            CheckOrderStatus::dispatch($order->id)->delay(now()->addMinutes(5));

            session()->forget('cart');

            // Commit the transaction
            DB::commit();
        } catch (\Exception $e) {
            // Rollback the transaction on error
            DB::rollBack();
            // Handle the exception, log or throw it if necessary
            throw $e;
        }
    }



    public function checkAvailability()
    {
        // Retrieve cart items from session
        $cartItems = $this->cart;

        // Get all product IDs from the cart
        $productIds = array_column($cartItems, 'product_id');

        // Query the product table to fetch product information including stock
        $products = DB::table('products')
            ->whereIn('id', $productIds)
            ->select('id', 'name', 'stock')
            ->get();

        // Map product IDs to product data for easier access
        $productData = [];
        foreach ($products as $product) {
            $productData[$product->id] = $product;
        }

        $this->errors = [];

        // Check availability for each product in the cart
        $this->stockAvailable = true;

        foreach ($cartItems as $cartItem) {
            $productId = $cartItem['product_id'];
            $requestedQuantity = $cartItem['quantity'];

            // Retrieve product information
            $product = $productData[$productId] ?? null;

            // Check if the product exists and if it has sufficient stock
            if (!$product) {
                $this->stockAvailable = false;
                $this->errors[$productId] = 'Product not found.';
            } elseif ($product->stock < $requestedQuantity) {
                $this->stockAvailable = false;
                $this->errors[$productId] = 'Insufficient stock.';
            }
        }

    }

    public function save()
    {
        $userId = Auth::id();
        // If payment method is not cash, display message
        if ($this->paymentMethod == 'cash') {
            session()->flash('message', 'We only accept cash right now.');
        } else {
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


            // Find the order or fail if not found
            $order = Order::findOrFail($this->order_id);

            // Define the attributes for the order
            $orderAttributes = [
                'address_id' => $address->id,
                'payment_method' => $this->paymentMethod,
                'subtotal' => $this->subtotal,
                'tax' => $this->tax,
                'shipping' => $this->shipping,
                'total' => $this->total,
                'status'=> 'pending',
            ];

            // Update the existing order with the new attributes
            $order->update($orderAttributes);
            session()->flash('success', 'Order placed successfully!');
            event(new OrderPlaced($order));
            session()->put('order_success', true);
            return redirect()->route('order-success');


        }
    }

    public function calculateSubtotal()
    {
        $this->subtotal = collect($this->cart)->reduce(function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        });
    }

    public function calculateTotal()
    {
        $this->tax = $this->subtotal * $this->tax;
        $this->total = $this->subtotal + $this->tax + $this->shipping;

    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
