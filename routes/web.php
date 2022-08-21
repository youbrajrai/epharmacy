<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
//error
Route::get('pagenotfound', [HomeController::class, 'pagenotfound'])->name('notfound');
