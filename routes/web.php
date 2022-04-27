<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\sayur;

// Home
Route::get('/home',[MainController::class,'home']);
Route::get('/shop',[MainController::class,'shop']);
Route::get('/about',[MainController::class,'about']);
Route::get('/contact',[MainController::class,'contact']);

// Insert Produk SQL
Route::get('/insert',[MainController::class,'insert']);

// Admin
Route::get('/admin',[MainController::class,'admin']);
Route::post('/login-data',[MainController::class,'login']);

// Input Sayur dan Buah
Route::get('/input',[MainController::class,'input']);
Route::post('/tambah',[sayur::class,'store']);

// Cart
Route::post('/tambah-cart',[MainController::class,'tambahCart']);
Route::get('/data-cart', [MainController::class,'dataCart']);
Route::get('/cart', [MainController::class,'cart']);
Route::get('/cart2', [MainController::class,'dataCart']);
Route::post('/check-out', [MainController::class,'checkOut']);
Route::get('/data-check-out', [MainController::class,'dataCheckOut']);
Route::get('/hapus', [MainController::class,'delete']);

// Search
Route::get('/search', [MainController::class, 'search']);
