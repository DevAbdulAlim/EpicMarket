<?php
use Illuminate\Support\Facades\Route;

Route::prefix('docs')
    ->name('docs.')
    ->group(function () {


        Route::get('/button', function () {
            return view('docs.button');
        })->name('login');
        Route::get('/dropdown', function () {
            return view('docs.dropdown');
        })->name('dropdown');
    });
