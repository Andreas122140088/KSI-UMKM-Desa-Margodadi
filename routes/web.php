<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


// Tambahkan rute berikut
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tersembunyi', function(){
    return view('admin');
}) ->name('tersembunyi');

Route::get('/home', function () {
    return view('home');
})->name('homepage');

Route::get('/home2', function () {
    return view('home2');
})->name('homepage');

Route::get('/about', function(){
    return view('about');
})->name('about');;

Route::get('/product', function(){
    return view('product');
})->name('product');;

Route::get('/login', function () {
    return view('login');
})->name('login');;
