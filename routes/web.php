<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/popup/{slung}', [App\Http\Controllers\HomeController::class, 'popup'])->name('popup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Users Routes
Auth::routes();
Route::group(['prefix'=>'clientsarea'], function(){

// SocialMedia
Route::get('/facebook', [LoginController::class, 'facebook']);
Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
Route::get('/google', [LoginController::class, 'google']);
Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);

});

