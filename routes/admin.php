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

        // Admin Authentication
        Route::controller(AdminAuthController::class)->group(function () {
            Route::get('/login', 'showLoginForm')->name('login');
            Route::post('/login', 'login');
            Route::post('/logout', 'logout')->name('logout');
        });

        // Admin Protected Routes
        Route::middleware(['auth.admin', 'admin_permission'])->group(function () {

            // Dashboard
            Route::controller(AdminDashboardController::class)->group(function () {
                Route::get('/dashboard', 'index')->name('dashboard');
            });

            // Categories Management
            Route::controller(AdminCategoryController::class)->group(function () {
                Route::get('/categories', 'index')->name('categories.index');
                Route::get('/categories/create', 'create')->name('categories.create');
                Route::post('/categories', 'store')->name('categories.store');
                Route::get('/categories/{id}/edit', 'edit')->name('categories.edit');
                Route::put('/categories/{id}', 'update')->name('categories.update');
                Route::delete('/categories/{id}', 'destroy')->name('categories.destroy');
            });

            // Product Management
            Route::controller(AdminProductController::class)->group(function () {
                Route::get('/products', 'index')->name('products.index');
                Route::get('/products/create', 'create')->name('products.create');
                Route::post('/products', 'store')->name('products.store');
                Route::get('/products/{id}/edit', 'edit')->name('products.edit');
                Route::put('/products/{id}', 'update')->name('products.update');
                Route::delete('/products/{id}', 'destroy')->name('products.destroy');
            });

            // Order Management
            Route::controller(AdminOrderController::class)->group(function () {
                Route::get('/orders', 'index')->name('orders.index');
                Route::get('/orders/{id}', 'show')->name('orders.show');
                Route::put('/orders/{id}', 'update')->name('orders.update');
                Route::delete('/orders/{id}', 'destroy')->name('orders.destroy');
            });

            // Coupon Management
            Route::controller(AdminCouponController::class)->group(function () {
                Route::get('/coupons', 'index')->name('coupons.index');
                Route::get('/coupons/create', 'create')->name('coupons.create');
                Route::post('/coupons', 'store')->name('coupons.store');
                Route::get('/coupons/{id}/edit', 'edit')->name('coupons.edit');
                Route::put('/coupons/{id}', 'update')->name('coupons.update');
                Route::delete('/coupons/{id}', 'destroy')->name('coupons.destroy');
            });

            // User Management
            Route::controller(AdminUserController::class)->group(function () {
                Route::get('/users', 'index')->name('users.index');
                Route::get('/users/{id}/edit', 'edit')->name('users.edit');
                Route::put('/users/{id}', 'update')->name('users.update');
                Route::delete('/users/{id}', 'destroy')->name('users.destroy');
            });

        });
    });
