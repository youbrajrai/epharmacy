<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
})->name('front');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
//error
Route::get('pagenotfound', [HomeController::class, 'pagenotfound'])->name('notfound');
