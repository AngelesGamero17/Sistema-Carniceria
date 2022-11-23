<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelacionController;

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

Route::get('/products',[RelacionController::class, 'index'])->name('product.index'); 
Route::get('/products/create', [RelacionController::class, 'create'])->name('product.create');  
Route::post('/products', [RelacionController::class, 'store'])->name('product.store');  
Route::get('/products/{id}',[RelacionController::class, 'edit'])->name('product.edit'); 
Route::put('/products', [RelacionController::class, 'update'])->name('product.update');  
