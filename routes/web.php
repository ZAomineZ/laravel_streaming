<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AnimeFilterController;
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
Route::get('/animes', AnimeFilterController::class)
    ->name('anime.index');
Route::get('/anime/{slug}/details', [AnimeController::class, 'details'])
    ->name('anime.details');
Route::get('/anime/{slug}/video', [AnimeController::class, 'show'])
    ->name('animes.video');
