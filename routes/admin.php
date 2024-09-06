<?php

use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\UserController;

// Admin Routes
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Admin Authentication Routes
        Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        // Admin Protected Routes with Middleware
        Route::middleware(['auth.admin', 'admin_permission'])->group(function () {

            // Dashboard Route
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

            // Categories Management Routes
            Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
            Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
            Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
            Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
            Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
            Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

            // Product Management Routes
            Route::get('products', [ProductController::class, 'index'])->name('products.index');
            Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
            Route::post('products', [ProductController::class, 'store'])->name('products.store');
            Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
            Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
            Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

            // Order Management Routes
            Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
            Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
            Route::put('orders/{id}', [OrderController::class, 'update'])->name('orders.update');
            Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

            // Coupon Management Routes
            Route::get('coupons', [CouponController::class, 'index'])->name('coupons.index');
            Route::get('coupons/create', [CouponController::class, 'create'])->name('coupons.create');
            Route::post('coupons', [CouponController::class, 'store'])->name('coupons.store');
            Route::get('coupons/{id}/edit', [CouponController::class, 'edit'])->name('coupons.edit');
            Route::put('coupons/{id}', [CouponController::class, 'update'])->name('coupons.update');
            Route::delete('coupons/{id}', [CouponController::class, 'destroy'])->name('coupons.destroy');

            // User Management Routes
            Route::get('users', [UserController::class, 'index'])->name('users.index');
            Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
            Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

            // Settings Routes
            Route::prefix('settings')->name('settings.')->group(function () {
                Route::get('general', [SettingsController::class, 'editGeneral'])->name('general.edit');
                Route::post('general', [SettingsController::class, 'updateGeneral'])->name('general.update');
            });
        });
    });
