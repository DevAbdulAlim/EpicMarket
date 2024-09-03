<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PaymentController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
Route::put('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

// Review Routes
Route::get('/products/{productId}/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/products/{productId}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::put('/reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

// Payment Routes
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');

// Coupon Routes
Route::post('/coupons/apply', [CouponController::class, 'apply'])->name('coupons.apply');

// User Routes (Protected with Auth Middleware)
Route::middleware(['auth'])->group(function () {
    // User Profile Routes
    Route::get('/user/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/user/edit', [UserController::class, 'editProfile'])->name('user.edit');
    Route::post('/user/update', [UserController::class, 'updateProfile'])->name('user.update');
    Route::get('/user/change-password', [UserController::class, 'changePassword'])->name('user.change-password');
    Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('user.update-password');

    // Wishlist Routes
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{productId}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{productId}', [WishlistController::class, 'remove'])->name('wishlist.remove');

    // Order Routes
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders/cancel/{id}', [OrderController::class, 'cancel'])->name('orders.cancel');
});

// Include Additional Route Files
include __DIR__ . '/auth.php';
include __DIR__ . '/admin.php';
include __DIR__ . '/docs.php';
