<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('admin.products.create');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
    
    // Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/grid', [ProductController::class, 'grid'])->name('products.grid');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

    // Coupons
    Route::get('/coupons', [\App\Http\Controllers\CouponController::class, 'index'])->name('coupons.index');
    Route::get('/coupons/add', [\App\Http\Controllers\CouponController::class, 'add'])->name('coupons.add');
    Route::get('/coupons/create', [\App\Http\Controllers\CouponController::class, 'add'])->name('coupons.create');

    // Sellers
    Route::get('/sellers', [\App\Http\Controllers\SellerController::class, 'index'])->name('sellers.index');
    Route::get('/sellers/create', [\App\Http\Controllers\SellerController::class, 'create'])->name('sellers.create');
    Route::get('/sellers/{id}/edit', [\App\Http\Controllers\SellerController::class, 'edit'])->name('sellers.edit');
    Route::get('/sellers/{id}', [\App\Http\Controllers\SellerController::class, 'show'])->name('sellers.show');

    // Reviews
    Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, 'index'])->name('reviews.index');

    // Sliders Management (Upload Slider Photo for User Storefront)
    Route::get('/sliders', [\App\Http\Controllers\SliderController::class, 'index'])->name('sliders.index');
    Route::get('/sliders/create', [\App\Http\Controllers\SliderController::class, 'create'])->name('sliders.create');
    Route::get('/sliders/{id}/edit', [\App\Http\Controllers\SliderController::class, 'edit'])->name('sliders.edit');
});
