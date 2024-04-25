<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function orders()
    {
        // logic to fetch user orders with pagination
        $orders = auth()->user()->orders()->paginate(10); // Paginate with 10 orders per page

        return view('user.orders', ['orders' => $orders]);
    }

    public function orderDetails($order)
    {
        // logic to fetch order details along with related order items
        $orderWithItems = Order::with('orderItems')->findOrFail($order);

        return view('user.orderDetails', ['order' => $orderWithItems]);
    }
}
