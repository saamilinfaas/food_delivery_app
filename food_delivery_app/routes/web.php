<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home',function (){
    return view('components.layouts.home');
});
Route::get('/about',function (){
    return view('components.layouts.about');
})->middleware('auth')->name('about');

/* Products */
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/add',[ProductsController::class,'add']);
Route::get('/products/{product}',[ProductsController::class,'show']);
Route::post('/products',[ProductsController::class,'create']);

/* Auth */
Route::get('/users/login',function (){
    return view('components.auth.login');
})->name('login');
Route::get('/users/register',function (){
    return view('components.auth.register');
});
Route::post('/users/register',[UserController::class,'create'])->middleware('guest');
Route::post('/users/login',[UserController::class,'login'])->middleware('guest');
Route::get('/users/logout',[UserController::class,'logout']);
Route::get('/users',[UserController::class,'index']);

