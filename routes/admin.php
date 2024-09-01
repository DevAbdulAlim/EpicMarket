<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminCouponController;
use App\Http\Controllers\Admin\AdminUserController;

// Admin Routes
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Admin Authentication Routes
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login']);
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        // Admin Protected Routes with Middleware
        Route::middleware(['auth.admin', 'admin_permission'])->group(function () {

            // Dashboard Route
            Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

            // Categories Management Routes
            Route::get('/categories', [AdminCategoryController::class, 'index'])->name('categories.index');
            Route::get('/categories/create', [AdminCategoryController::class, 'create'])->name('categories.create');
            Route::post('/categories', [AdminCategoryController::class, 'store'])->name('categories.store');
            Route::get('/categories/{id}/edit', [AdminCategoryController::class, 'edit'])->name('categories.edit');
            Route::put('/categories/{id}', [AdminCategoryController::class, 'update'])->name('categories.update');
            Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy'])->name('categories.destroy');

            // Product Management Routes
            Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
            Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
            Route::post('/products', [AdminProductController::class, 'store'])->name('products.store');
            Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
            Route::put('/products/{id}', [AdminProductController::class, 'update'])->name('products.update');
            Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');

            // Order Management Routes
            Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
            Route::get('/orders/{id}', [AdminOrderController::class, 'show'])->name('orders.show');
            Route::put('/orders/{id}', [AdminOrderController::class, 'update'])->name('orders.update');
            Route::delete('/orders/{id}', [AdminOrderController::class, 'destroy'])->name('orders.destroy');

            // Coupon Management Routes
            Route::get('/coupons', [AdminCouponController::class, 'index'])->name('coupons.index');
            Route::get('/coupons/create', [AdminCouponController::class, 'create'])->name('coupons.create');
            Route::post('/coupons', [AdminCouponController::class, 'store'])->name('coupons.store');
            Route::get('/coupons/{id}/edit', [AdminCouponController::class, 'edit'])->name('coupons.edit');
            Route::put('/coupons/{id}', [AdminCouponController::class, 'update'])->name('coupons.update');
            Route::delete('/coupons/{id}', [AdminCouponController::class, 'destroy'])->name('coupons.destroy');

            // User Management Routes
            Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
            Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
            Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');
            Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.destroy');
        });
    });
