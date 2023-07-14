<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LayoutController::class,'home'])->name('pages.home');

Route::prefix('login')->group(function () {
    Route::get('/',[CustomerController::class,'login'])->name('auth.login');
    Route::post('/signin',[CustomerController::class,'signin'])->name('auth.signin');
});

Route::get('/logout',[CustomerController::class,'logout'])->name('auth.logout');

Route::prefix('register')->group(function () {
    Route::get('/',[CustomerController::class,'register'])->name('auth.register');
    Route::post('/signup',[CustomerController::class,'signup'])->name('auth.signup');
});

Route::get('list',[ProductController::class,'list'])->name('products.list');

Route::post('whishlist/{product_id}',[CustomerController::class,'addToWhishlist']);