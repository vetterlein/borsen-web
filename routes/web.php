<?php
use App\Http\Controllers\ArtikkelController;
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
Route::get('/artikkelkontrol', [ArtikkelController::class, 'show']);

Route::post('/articles', [ArticlesController::class, 'store']);



Route::get('/', function() {
    return view('pages.welcome');
});

Route::get('/articles', function() {
    return view('pages.list');
});

//Route::get('/articles', [ArticlesController::class, 'index']);

