<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/vava', function () {
    return view('hello');
});




Route::resource('products', ProductController::class);