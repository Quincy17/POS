<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/categories', [ProductsController::class, 'index'])->name('categories.index');

Route::prefix('categories')->group(function(){
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage'])->name('categories.food-beverage');
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth'])->name('categories.beauty-health');
    Route::get('/home-care', [ProductsController::class, 'homeCare'])->name('categories.home-care');
    Route::get('/baby-kid', [ProductsController::class, 'babyKid'])->name('categories.baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('profile');

Route::get('/sales', [SalesController::class, 'index']);

