<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AdminController;


// Home Page
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homePage')->name('home.page');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});