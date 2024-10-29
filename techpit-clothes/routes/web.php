<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::group('product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::controller(ProductController::class)->group(function () {
  Route::name('product.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/{id}', 'show')->name('show');
  });
});
