<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\FilmController;
use App\http\Controllers\genreController;

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

Route::get('/film',[FilmController::class,'index']);
Route::post('/film',[FilmController::class,'store']);

Route::get('/film/genre',[GenreController::class,'index']);
Route::post('/film/genre',[GenreController::class,'store']);