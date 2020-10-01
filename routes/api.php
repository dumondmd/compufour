<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

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
Route::get('/filme', [FilmeController::class, 'showFilmes'])->name("filme.showFilmes");
Route::get('/genero', [FilmeController::class, 'showGeneros'])->name("filme.showGeneros");

//Route::get('user/{id}', [UserController::class, 'show']);