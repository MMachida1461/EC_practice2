<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LineItemController;

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::controller(ProductController::class)->group(function () {
  Route::name('product.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/{id}', 'show')->name('show');
  });
});

Route::controller(LineItemController::class)->group(function () {
  Route::name('line_item.')->group(function () {
    Route::post('/line_item/create', 'create')->name('create');
  });
});
