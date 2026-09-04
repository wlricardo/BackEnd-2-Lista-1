<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraListaController extends Controller
{
    public function feedback()
    {
        return view('feedback');
    }

    public function receberDados(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $comentario = $request->input('comentario');
        $avaliacao = $request->input('avaliacao');
        return view('resultado', compact('nome', 'email', 'comentario', 'avaliacao'));
    }
}
