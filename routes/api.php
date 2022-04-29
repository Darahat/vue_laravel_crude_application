<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/article', [UserController::class, 'index']);
 
Route::namespace('Api')->group(function () {
    // Route::get('/users', 'UsersController@index');
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::post('/store', [ArticleController::class, 'store']);
    Route::get('/show/{id}', [ArticleController::class, 'show']);
    Route::get('/edit/{id}', [ArticleController::class, 'edit']);
    Route::put('/update/{id}', [ArticleController::class, 'update']);
    Route::put('/delete/{id}', [ArticleController::class, 'destroy']);

});