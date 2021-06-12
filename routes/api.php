<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::resource('/articles', ArticlesController::class);*/

Route::get('/articles', [ArticlesController::class, 'index']);

Route::post('/articles', [ArticlesController::class, 'store']);
 


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
