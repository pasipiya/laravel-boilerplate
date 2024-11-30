<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

// Product Routes
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