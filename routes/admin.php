<?php

use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\ReturnController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::redirect('', '/admin/dashboard');

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

                // Routes for Category
                Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
                Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
                Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
                Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
                Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
                Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

                // Routes for Product
                Route::get('/products', [ProductController::class, 'index'])->name('products.index');
                Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
                Route::post('/products', [ProductController::class, 'store'])->name('products.store');
                Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
                Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
                Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
                Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

                // Routes for Brand
                Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
                Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
                Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');
                Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brands.show');
                Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
                Route::put('/brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
                Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');

                // Routes for Tag
                Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
                Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
                Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
                Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tags.show');
                Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
                Route::put('/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
                Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');

                // Routes for Attribute
                Route::get('/attributes', [AttributeController::class, 'index'])->name('attributes.index');
                Route::get('/attributes/create', [AttributeController::class, 'create'])->name('attributes.create');
                Route::post('/attributes', [AttributeController::class, 'store'])->name('attributes.store');
                Route::get('/attributes/{attribute}', [AttributeController::class, 'show'])->name('attributes.show');
                Route::get('/attributes/{attribute}/edit', [AttributeController::class, 'edit'])->name('attributes.edit');
                Route::put('/attributes/{attribute}', [AttributeController::class, 'update'])->name('attributes.update');
                Route::delete('/attributes/{attribute}', [AttributeController::class, 'destroy'])->name('attributes.destroy');
            });

            Route::prefix('sales')->name('sales.')->group(function () {
                Route::get('', [DashboardController::class, 'sales'])->name('index');

                // Routes for Order
                Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
                Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
                Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
                Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
                Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
                Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
                Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

                // Routes for Return
                Route::get('/returns', [ReturnController::class, 'index'])->name('returns.index');
                Route::get('/returns/create', [ReturnController::class, 'create'])->name('returns.create');
                Route::post('/returns', [ReturnController::class, 'store'])->name('returns.store');
                Route::get('/returns/{return}', [ReturnController::class, 'show'])->name('returns.show');
                Route::get('/returns/{return}/edit', [ReturnController::class, 'edit'])->name('returns.edit');
                Route::put('/returns/{return}', [ReturnController::class, 'update'])->name('returns.update');
                Route::delete('/returns/{return}', [ReturnController::class, 'destroy'])->name('returns.destroy');

                // Routes for Transaction
                Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
                Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
                Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
                Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
                Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');
                Route::put('/transactions/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');
                Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');

                // Routes for Invoice
                Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
                Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
                Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
                Route::get('/invoices/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');
                Route::get('/invoices/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
                Route::put('/invoices/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');
                Route::delete('/invoices/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');
            });

            Route::prefix('marketing')->name('marketing.')->group(function () {
                Route::get('', [DashboardController::class, 'marketing'])->name('index');

                // Routes for Coupon
                Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
                Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupons.create');
                Route::post('/coupons', [CouponController::class, 'store'])->name('coupons.store');
                Route::get('/coupons/{coupon}', [CouponController::class, 'show'])->name('coupons.show');
                Route::get('/coupons/{coupon}/edit', [CouponController::class, 'edit'])->name('coupons.edit');
                Route::put('/coupons/{coupon}', [CouponController::class, 'update'])->name('coupons.update');
                Route::delete('/coupons/{coupon}', [CouponController::class, 'destroy'])->name('coupons.destroy');

                // Routes for Discount
                Route::get('/discounts', [DiscountController::class, 'index'])->name('discounts.index');
                Route::get('/discounts/create', [DiscountController::class, 'create'])->name('discounts.create');
                Route::post('/discounts', [DiscountController::class, 'store'])->name('discounts.store');
                Route::get('/discounts/{discount}', [DiscountController::class, 'show'])->name('discounts.show');
                Route::get('/discounts/{discount}/edit', [DiscountController::class, 'edit'])->name('discounts.edit');
                Route::put('/discounts/{discount}', [DiscountController::class, 'update'])->name('discounts.update');
                Route::delete('/discounts/{discount}', [DiscountController::class, 'destroy'])->name('discounts.destroy');
            });

            Route::prefix('engagements')->name('engagements.')->group(function () {
                Route::get('', [DashboardController::class, 'engagements'])->name('index');

                // Routes for Customer(User)
                Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
                Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
                Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
                Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
                Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
                Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
                Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

                // Routes for Review
                Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
                Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
                Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
                Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
                Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
                Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
                Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
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
                Route::get('advanced', [SettingsController::class, 'editAdvanced'])->name('advanced.edit');
                Route::post('advanced', [SettingsController::class, 'updateAdvanced'])->name('advanced.update');
            });

        });
    });
