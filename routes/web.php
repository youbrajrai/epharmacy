<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShopDetailController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CartController;




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

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [HomeController::class, 'index']);

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shopdetail', [ShopDetailController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/wishlist', [WishlistController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);





Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
//error
Route::get('pagenotfound', [HomeController::class, 'pagenotfound'])->name('notfound');
