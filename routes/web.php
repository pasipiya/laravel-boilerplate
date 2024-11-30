<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('products')->group(function () {
    // Get all products
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    
    // Get a single product by ID
    Route::get('{id}', [ProductController::class, 'show'])->name('products.show');
    
    // Create a new product
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    
    // Update an existing product
    Route::put('{id}', [ProductController::class, 'update'])->name('products.update');
    
    // Delete a product
    Route::delete('{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

require __DIR__.'/auth.php';
