<?php

use App\Http\Controllers\JamuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JamuController::class, 'home'])->name('home');
Route::get('/katalog-jamu', [JamuController::class, 'catalog'])->name('catalog');
Route::get('/produk/{slug}', [JamuController::class, 'show'])->name('products.show');
