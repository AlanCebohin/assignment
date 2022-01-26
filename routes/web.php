<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Home
Route::get('/', function () {
    return view('home');
});

// Products
Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('delete');
});
