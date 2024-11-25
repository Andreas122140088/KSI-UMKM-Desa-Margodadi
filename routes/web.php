<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Tambahkan rute berikut
Route::get('/product', [ProductController::class, 'index'])->name('product');


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/homepage2', function () {
    return view('homepage2');
})->name('homepage2');

Route::get('/about', function(){
    return view('about');
})->name('about');;

Route::get('/favorite', function(){
    return view('favorite');
})->name('favorite');;

Route::get('/product', function(){
    return view('product');
})->name('product');;

Route::get('/login', function () {
    return view('login');
})->name('login');;
