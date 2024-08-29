<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class,'tampil'])->name('product.tampil');
Route::get('/product/tambah', [ProductController::class,'tambah'])->name('product.tambah');
Route::post('/product/submit', [ProductController::class,'submit'])->name('product.submit');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
Route::post('/product/delete/{id}', [ProductController::class,'delete'])->name('product.delete');