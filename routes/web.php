<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoupleController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
Route::resource('students', StudentController::class);
Route::resource('couples', CoupleController::class);
Route::resource('products', ProductController::class);
