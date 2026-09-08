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

Route::get('/formularioCPF', [PrimeiraListaController::class, 'formularioCPF']);
Route::post('/verificar-cpf', [PrimeiraListaController::class, 'verificarCPF']);

Route::get('/formularioIMC', [PrimeiraListaController::class, 'formularioIMC']);
Route::post('/calcular-imc', [PrimeiraListaController::class, 'calcularIMC']);

Route::get('/formularioVotacao', [PrimeiraListaController::class, 'formularioVotacao'])->name('poll.index');
Route::post('/contabilizarVotos', [PrimeiraListaController::class, 'votar']);
