<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\MaritalsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
//use Illuminate\Http\Request;

/*
| Web Routes
|------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\RelacionController@index');  
Route::resource('/Conditions',ConditionsController::class)->names('Conditions')->middleware('auth');
Route::resource('/Maritals',MaritalsController::class)->names('Maritals')->middleware('auth');
Route::resource('/Orders',OrdersController::class)->names('Orders')->middleware('auth');
Route::resource('/Products',ProductsController::class)->names('Products')->middleware('auth');
Route::resource('/Users',UsersController::class)->names('Users')->middleware('auth');

//Route::view('/welcome', 'welcome');

//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//Route::get('/gonzalo/{libro}', function (Request $request) {
  
   //return $request;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function () {
   Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
