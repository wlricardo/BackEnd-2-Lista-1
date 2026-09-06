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


    // Dados dois números e uma operação matemática básica, retornar o valor da operação
    public function formularioCalculadora()
    {
        return view('formularioCalculadora');
    }

    public function calcular(Request $request)
    {
        $resultado = 0;
        $operacao = $request->input('operacao');
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');

        switch ($operacao) {
            case '+':
                $resultado = $numero1 + $numero2;
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                break;
        }

        return view('resultadoCalculo', compact('operacao', 'numero1', 'numero2', 'resultado'));
    }


    // Converter de graus celsius para fahrenheit e vice-versa
    public function formularioTemperatura()
    {
        return view('formularioTemperatura');
    }

    public function converterTemperatura(Request $request)
    {
        $resultado = 0;
        $temperatura = $request->input('temperatura');
        $operacao = $request->input('operacao');

        switch ($operacao) {
            case '1': // Celsius -> Fahrenheit
                $resultado = ($temperatura * 1.8) + 32;
                break;
            case '2': // Fahrenheit -> Celsius
                $resultado = ($temperatura - 32) / 1.8;
                break;
        }

        return view('converterTemperatura', compact('temperatura', 'operacao', 'resultado'));
    }
}
