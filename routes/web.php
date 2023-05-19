<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\PostController;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);
Route::resource('/categories', CategoryController::class);

Route::get('/', function () {
    return view('welcome');
});


