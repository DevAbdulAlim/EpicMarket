<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function orders() {
        return view('user.orders');
    }

    public function orderDetails() {
        return view('user.orderDetails');
    }
}
