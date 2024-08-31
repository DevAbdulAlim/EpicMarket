<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.page');
});


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
});
