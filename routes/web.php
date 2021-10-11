<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\UserController;


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


Route::resource('/', IndexController::class);

Auth::routes();

Route::middleware('auth')->group(function (){
	Route::get('/home', [HomeController::class, 'index'])
		->name('home');

	Route::resource('product',ProductController::class);
	Route::resource('user',UserController::class);

});
