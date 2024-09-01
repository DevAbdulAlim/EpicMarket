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

// Public Home Route
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

// User Routes
Route::middleware(['auth'])->group(function () {

    Route::controller(UserController::class)->group(function () {
        Route::get('/user/profile', 'index')->name('user.profile');
        Route::get('/user/edit', 'editProfile')->name('user.edit');
        Route::post('/user/update', 'updateProfile')->name('user.update');
        Route::get('/user/change-password', 'changePassword')->name('user.change-password');
        Route::post('/user/update-password', 'updatePassword')->name('user.update-password');
    });

    // Wishlist Routes
    Route::controller(WishlistController::class)->group(function () {
        Route::get('/wishlist', 'index')->name('wishlist.index');
        Route::post('/wishlist/add/{productId}', 'add')->name('wishlist.add');
        Route::delete('/wishlist/remove/{productId}', 'remove')->name('wishlist.remove');
    });

    // Orders Routes
    Route::controller(OrderController::class)->group(function () {
        Route::get('/orders', 'index')->name('orders.index');
        Route::get('/orders/{id}', 'show')->name('orders.show');
        Route::post('/orders/cancel/{id}', 'cancel')->name('orders.cancel');
    });
});

// Product Routes
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/{id}', 'show')->name('products.show');
});

// Cart Routes
Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart.index');
    Route::post('/cart/add/{productId}', 'add')->name('cart.add');
    Route::put('/cart/update/{productId}', 'update')->name('cart.update');
    Route::delete('/cart/remove/{productId}', 'remove')->name('cart.remove');
    Route::delete('/cart/clear', 'clear')->name('cart.clear');
});

// Checkout Routes
Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout', 'index')->name('checkout.index');
    Route::post('/checkout', 'store')->name('checkout.store');
});

// Review Routes
Route::controller(ReviewController::class)->group(function () {
    Route::get('/products/{productId}/reviews', 'index')->name('reviews.index');
    Route::post('/products/{productId}/reviews', 'store')->name('reviews.store');
    Route::put('/reviews/{id}', 'update')->name('reviews.update');
    Route::delete('/reviews/{id}', 'destroy')->name('reviews.destroy');
});

// Payment Routes
Route::controller(PaymentController::class)->group(function () {
    Route::get('/payment', 'index')->name('payment.index');
    Route::post('/payment/process', 'process')->name('payment.process');
    Route::get('/payment/callback', 'callback')->name('payment.callback');
});

// Coupon Routes
Route::controller(CouponController::class)->group(function () {
    Route::post('/coupons/apply', 'apply')->name('coupons.apply');
});

// Include Admin Routes
include __DIR__ . '/admin.php';
