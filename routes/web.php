<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/products/{category?}/{item?}/', [StaticController::class, 'products'])->name('home.products');
Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');

Route::resource('/computers', ComputerController::class);
