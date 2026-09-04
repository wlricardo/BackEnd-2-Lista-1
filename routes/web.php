<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraListaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feedback', [PrimeiraListaController::class, 'feedback']);
Route::post('/receber-dados', [PrimeiraListaController::class, 'receberDados']);
