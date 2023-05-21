<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CartController;

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

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function(){
    Route::get('/catalogue', function(){return view('admin.catalogue');});
});

Route::prefix('manager')->middleware('auth')->group(function(){
    Route::get('/catalogue', function(){return view('manager.catalogue');});
    Route::get('/order', function(){return view('manager.catalogue');});
    Route::get('/order/{id}', function(){return view('manager.catalogue');});
});

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/home', function () {
    return view('landing_page_after_login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/catalogue', [CatalogController::class, 'index']);
Route::get('/product/{id}', [CatalogController::class, 'showProduct']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');