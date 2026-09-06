<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraListaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feedback', [PrimeiraListaController::class, 'feedback']);
Route::post('/receber-dados', [PrimeiraListaController::class, 'receberDados']);

Route::get('/formulario', [PrimeiraListaController::class, 'cadastrarUsuario']);
Route::post('/verificar-dados', [PrimeiraListaController::class, 'verificarDados']);

Route::get('/formularioCalculadora', [PrimeiraListaController::class, 'formularioCalculadora']);
Route::post('/calcular', [PrimeiraListaController::class, 'calcular']);

Route::get('/formularioTemperatura', [PrimeiraListaController::class, 'formularioTemperatura']);
Route::post('/converter', [PrimeiraListaController::class, 'converterTemperatura']);
