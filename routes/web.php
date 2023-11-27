<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\ProductSearch;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/products/search', ProductSearch::class)->name('product.search');
Route::get('/products/{product}', [ProductController::class, 'details'])->name('product.details');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', Cart::class)->name('cart');
    Route::get('/checkout', Checkout::class)->name('checkout');
    Route::get('/user/orders', [UserController::class, 'orders'])->name('user.orders');
    Route::get('/user/orders/{order}', [UserController::class, 'orderDetails'])->name('user.order.details');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
