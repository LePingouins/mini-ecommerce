<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home page shows product list
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Auth routes (login/register)
Auth::routes();

// Dashboard (optional)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Only authenticated users can access product CRUD
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class)->except(['index']);
});