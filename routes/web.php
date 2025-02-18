<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');


//Halaman Products (Route Prefix)
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
});

//Halaman User (Route Parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.profile');

//Halaman penjualan
Route::get('/sale', [SaleController::class, 'index'])->name('sale.index');