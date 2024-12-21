<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchaseController;
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

/* Profile */

Route::get('/profile',[]);

/*  products Categories */
Route::get('/products/category',[CategoryController::class,'index'])->name('showcategory');
Route::get('/products/category/add',[CategoryController::class,'add'])->name('addcategory');
Route::get('/products/category/{name}',[CategoryController::class,'show'])->name('productcategory');
Route::post('/products/category',[CategoryController::class,'create'])->name('createcategory');


/* Products */
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/add',[ProductsController::class,'add']);
Route::get('/products/{id}',[ProductsController::class,'show'])->name('singleproduct');
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


/* Purchase */

Route::delete('/purchase/{id}', [PurchaseController::class, 'destroy'])->name('purchase.destroy');
Route::post('/purchase',[PurchaseController::class,'create'])->middleware('auth');
Route::get('/purchase/cart',[PurchaseController::class,'myList']);
Route::delete('/purchase/cart/{id}',[PurchaseController::class,'destroy']);


