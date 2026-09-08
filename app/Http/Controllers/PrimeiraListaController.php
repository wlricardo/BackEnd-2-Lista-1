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


    // Verificar se um CPF é válido
    public function formularioCPF()
    {
        return view('formularioCPF');
    }

    public function verificarCPF(Request $request)
    {
        $cpfValido = true;
        $cpf = $request->input('cpf');
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        if (strlen($cpf) != 11) {
            $cpfValido = false;
            return view('verificarCPF', compact('cpfValido'));
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            $cpfValido = false;
            return view('verificarCPF', compact('cpfValido'));
        }

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                $cpfValido = false;
                return view('verificarCPF', compact('cpfValido'));
            }
        }

        return view('verificarCPF', compact('cpfValido'));
    }


    // Dado o peso e a altura, calcular o IMC
    public function formularioIMC()
    {
        return view('formularioIMC');
    }

    public function calcularIMC(Request $request)
    {
        $classificacao = "";
        $imc = 0;
        $peso = $request->input('peso');
        $altura = $request->input('altura');

        $imc = $peso / ($altura * $altura);

        switch ($imc) {
            case ($imc < 18.5):
                $classificacao = 'Magreza';
                break;
            case ($imc <= 24.9):
                $classificacao = 'Nomal';
                break;
            case ($imc <= 29.9):
                $classificacao = 'Sobrepeso';
                break;
            case ($imc <= 39.9):
                $classificacao = 'Obesidade';
                break;
            case ($imc >= 40.0):
        }

        return view('calcularIMC', compact('peso', 'altura', 'imc', 'classificacao'));
    }


    // Formulário de votação simples
    public function formularioVotacao()
    {
        return view('formularioVotacao');
    }

    public function votar(Request $request)
    {
        // 1. Pega qual foi o voto selecionado no HTML (name="opcoes")
        $votoSelecionado = $request->input('opcoes');

        // 2. Cria a estrutura padrão de contagem
        $opcoes = [
            'Não' => 0,
            'Não, mas eu tenho boletos' => 0,
            'Sim' => 0
        ];

        // 3. Recupera os votos antigos da sessão ou assume 0 se for a primeira vez
        $opcao1 = $request->session()->get('Não', 0);
        $opcao2 = $request->session()->get('Não, mas eu tenho boletos', 0);
        $opcao3 = $request->session()->get('Sim', 0);

        // 4. Incrementa SOMENTE a opção que o usuário de fato clicou
        if ($votoSelecionado === 'Não') {
            $opcao1++;
            $request->session()->put('Não', $opcao1);
        } elseif ($votoSelecionado === 'Não, mas eu tenho boletos') {
            $opcao2++;
            $request->session()->put('Não, mas eu tenho boletos', $opcao2);
        } elseif ($votoSelecionado === 'Sim') {
            $opcao3++;
            $request->session()->put('Sim', $opcao3);
        }

        // 5. Atualiza o array geral com os valores novos da sessão
        $opcoes['Não'] = $opcao1;
        $opcoes['Não, mas eu tenho boletos'] = $opcao2;
        $opcoes['Sim'] = $opcao3;

        // 6. SOLUÇÃO DO ERRO: Retorna para o formulário injetando os dados na sessão temporária
        return redirect()->route('poll.index')->with(['opcoes' => $opcoes, 'votado' => true]);
    }
}
