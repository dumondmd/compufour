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
Route::get('/filme/lista/{qtd?}', [FilmeController::class, 'showFilmes'])->name("filme.showFilmes");
Route::get('/filme/tops/{top?}', [FilmeController::class, 'showTopFilmes'])->name("filme.showTopFilmes");
Route::get('/filme/nome/{nome}', [FilmeController::class, 'showFilmeNome'])->name("filme.showFilmeNome");
Route::get('/filme/categoria/{categoria}', [FilmeController::class, 'showFilmeCategoria'])->name("filme.showFilmeCategoria");
Route::get('/genero', [FilmeController::class, 'showGeneros'])->name("filme.showGeneros");
Route::get('/genero/{id}', [FilmeController::class, 'showGeneroId'])->name("filme.showGeneroId");

