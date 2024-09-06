<?php

use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
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
        Route::prefix('auth')->name('auth.')->group(function () {
            Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
            Route::post('login', [AuthController::class, 'login']);
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        });

        // Admin Protected Routes with Middleware
        Route::middleware(['auth.admin', 'admin_permission'])->group(function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

            Route::prefix('catalog')->name('catalog.')->group(function () {
                Route::get('', [DashboardController::class, 'catalog'])->name('index');
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
            });

            Route::prefix('sales')->name('sales.')->group(function () {
                Route::get('', [DashboardController::class, 'sales'])->name('index');
                // Order Management Routes
                Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
                Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
                Route::put('orders/{id}', [OrderController::class, 'update'])->name('orders.update');
                Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
            });

            Route::prefix('marketing')->name('marketing.')->group(function () {
                Route::get('', [DashboardController::class, 'marketing'])->name('index');
                // Coupon Management Routes
                Route::get('coupons', [CouponController::class, 'index'])->name('coupons.index');
                Route::get('coupons/create', [CouponController::class, 'create'])->name('coupons.create');
                Route::post('coupons', [CouponController::class, 'store'])->name('coupons.store');
                Route::get('coupons/{id}/edit', [CouponController::class, 'edit'])->name('coupons.edit');
                Route::put('coupons/{id}', [CouponController::class, 'update'])->name('coupons.update');
                Route::delete('coupons/{id}', [CouponController::class, 'destroy'])->name('coupons.destroy');
            });

            Route::prefix('engagements')->name('engagements.')->group(function () {
                Route::get('', [DashboardController::class, 'engagements'])->name('index');
                //user management routes
                Route::get('users', [UserController::class, 'index'])->name('users.index');
                Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
                Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
                Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
            });

            Route::prefix('settings')->name('settings.')->group(function () {
                Route::get('', [DashboardController::class, 'settings'])->name('index');
                // General Settings
                Route::get('general', [SettingsController::class, 'editGeneral'])->name('general.edit');
                Route::post('general', [SettingsController::class, 'updateGeneral'])->name('general.update');
                // Business Settings
                Route::get('business', [SettingsController::class, 'editBusiness'])->name('business.edit');
                Route::post('business', [SettingsController::class, 'updateBusiness'])->name('business.update');
                // Site Settings
                Route::get('site', [SettingsController::class, 'editSite'])->name('site.edit');
                Route::post('site', [SettingsController::class, 'updateSite'])->name('site.update');
                // Shipping Settings
                Route::get('shipping', [SettingsController::class, 'editShipping'])->name('shipping.edit');
                Route::post('shipping', [SettingsController::class, 'updateShipping'])->name('shipping.update');
                // Payment Settings
                Route::get('payment', [SettingsController::class, 'editPayment'])->name('payment.edit');
                Route::post('payment', [SettingsController::class, 'updatePayment'])->name('payment.update');
                // Tax Settings
                Route::get('tax', [SettingsController::class, 'editTax'])->name('tax.edit');
                Route::post('tax', [SettingsController::class, 'updateTax'])->name('tax.update');
                // Security Settings
                Route::get('security', [SettingsController::class, 'editSecurity'])->name('security.edit');
                Route::post('security', [SettingsController::class, 'updateSecurity'])->name('security.update');
                // Notifications Settings
                Route::get('notifications', [SettingsController::class, 'editNotifications'])->name('notifications.edit');
                Route::post('notifications', [SettingsController::class, 'updateNotifications'])->name('notifications.update');
                // Integrations Settings
                Route::get('integrations', [SettingsController::class, 'editIntegrations'])->name('integrations.edit');
                Route::post('integrations', [SettingsController::class, 'updateIntegrations'])->name('integrations.update');
            });

        });
    });
