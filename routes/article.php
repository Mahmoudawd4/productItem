<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
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
//crad category

//list cate
// Route::get(
//     '/cat',
//     [CategoryController::class, 'list']
// )->name('cat.list');

// //show cate
// Route::get(
//     'cat/show/{id}',
//     [CategoryController::class, 'show']
// )->name('cat.show');


// //crete
// Route::get(
//     'cat/create',
//     [CategoryController::class, 'create']
// )->name('cat.create');
// Route::post(
//     'cat/store',
//     [CategoryController::class, 'store']
// )->name('cat.store');

// //update
// Route::get(
//     'cat/edit/{id}',
//     [CategoryController::class, 'edit']
// )->name('cat.edit');


// Route::post(
//     'cat/update/{id}',
//     [CategoryController::class, 'update']
// )->name('cat.update');

// //Delete
// Route::delete(
//     'cat/delete/{id}',
//     [CategoryController::class, 'delete']
// )->name('cat.delete');



//////////////////////////////////// Crad  articals  ///////////////

Route::get(
    '/arti',
    [ArticleController::class, 'list']
)->name('arti.list');

//show cate
Route::get(
    'arti/show/{id}',
    [ArticleController::class, 'show']
)->name('arti.show');


//crete
Route::get(
    'arti/create',
    [ArticleController::class, 'create']
)->middleware(['auth','isAdmin','dob'])->name('arti.create');
Route::post(
    'arti/store',
    [ArticleController::class, 'store']
)->middleware(['auth','isAdmin','dob'])->name('arti.store');

//update
Route::get(
    'arti/edit/{id}',
    [ArticleController::class, 'edit']
)->middleware(['auth','isAdmin','dob'])->name('arti.edit');


Route::post(
    'arti/update/{id}',
    [ArticleController::class, 'update']
)->middleware(['auth','isAdmin','dob'])->name('arti.update');

//Delete
Route::delete(
    'arti/delete/{id}',
    [ArticleController::class, 'delete']
)->middleware(['auth','isAdmin','dob'])->name('arti.delete');




// Route::get(
//     '/product{id}',
//     [HomeController::class,'Products']
// )->name('Products');

// Route::get(
//     '/home',
//     [HomeController::class,'Products']
// )->name('Home');

// Route::get(
//     '/product{id}',
//     [productController::class, 'Product']
// )->name('produdct');


