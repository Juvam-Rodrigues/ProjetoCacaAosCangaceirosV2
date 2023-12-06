<?php

use App\Http\Controllers\JogadorController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\SessoesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SessoesController::class, 'new']);
Route::get('/deslogar', [SessoesController::class, 'back']);
Route::post('/logar', [SessoesController::class, 'create']);

Route::post('/registro', [JogadorController::class, 'create']);
Route::get('/registro', [JogadorController::class, 'new']);

Route::get('/partidas', [PartidaController::class, 'exibir']);

Route::get('/save', [PartidaController::class, 'save']);




