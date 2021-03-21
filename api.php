<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

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
//Route::get('films','FilmController@index');
Route::get('films',[FilmController::class, 'index']);
Route::get('film/{id}',[FilmController::class, 'show']);
Route::post('film',[FilmController::class, 'store']);
Route::put('film',[FilmController::class, 'store']);

Route::delete('film/{id}',[FilmController::class, 'destroy']);
