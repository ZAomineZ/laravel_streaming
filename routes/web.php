<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)
    ->name('home');
Route::get('/animes', [AnimeController::class, 'index'])
    ->name('anime.index');
Route::get('/animes/details', [AnimeController::class, 'details'])
    ->name('anime.details');
Route::get('/animes/video', [AnimeController::class, 'show'])
    ->name('animes.video');
