<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BannerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// disable register link
Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// banner routes
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get('/', [AdminController::class, 'admin'])->name('admin');
    Route::resource('/banner', BannerController::class);
    Route::get('show/banner/{id}', [BannerController::class, 'show']);
    Route::get('/delete/banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
});