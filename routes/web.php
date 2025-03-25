<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\FrontController::class, 'index'])->name('front.index');
Route::get('/detail/{id}',[App\Http\Controllers\FrontController::class, 'detail'])->name('front.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
