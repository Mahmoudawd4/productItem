<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//list cate
Route::get(
    '/cat',
    [CategoryController::class, 'list']
);
//show cate
Route::get(
    'cat/show/{id}',
    [CategoryController::class, 'show']
);

//crete
Route::post(
    'cat/store',
    [CategoryController::class, 'store']
);

//update
Route::post(
    'cat/update/{id}',
    [CategoryController::class, 'update']
);

//Delete
Route::delete(
    'cat/delete/{id}',
    [CategoryController::class, 'delete']
);
