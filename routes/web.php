<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get(
    '/home',
    [HomeController::class,'Home']
)->name('Home');


Route::get(
    '/product{id}',
    [HomeController::class,'Products']
)->name('Products');

// Route::get(
//     '/home',
//     [HomeController::class,'Products']
// )->name('Home');

// Route::get(
//     '/product{id}',
//     [productController::class, 'Product']
// )->name('produdct');