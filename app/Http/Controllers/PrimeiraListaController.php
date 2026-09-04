<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraListaController extends Controller
{
    // Enviar dados a um formulário de feedback e receber os dados enviados pelo usuário
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


    // Cadastrar usuário e receber os dados enviados pelo usuário
    public function cadastrarUsuario()
    {
        return view('formulario');
    }

    public function verificarDados(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $confirmarSenha = $request->input('confirmarSenha');

        return view('cadastro', compact('nome', 'email', 'senha', 'confirmarSenha'));
    }
}
