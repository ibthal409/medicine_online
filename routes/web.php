<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyListController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\ProductController;


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
    return view('home');
});
Route::post('/search', [MedicinesController::class,'search']);
Route::resource('/products',ProductController::class);

Route::Group(['middleware'=>'Guest'],function(){
Route::post('/auth/save',[SignController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[SignController::class, 'check'])->name('auth.check');
Route::get('/login',[SignController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[SignController::class, 'register'])->name('auth.register');
});

Route::Group(['middleware'=>'AuthChecked'],function(){
Route::get('/logout',[SignController::class,'logout']);
Route::resource('/mylist',MyListController::class);
});
