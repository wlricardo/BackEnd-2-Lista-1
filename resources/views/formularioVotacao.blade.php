<form action="/contabilizarVotos" method="POST">
    <fieldset>
        <legend>Você quer ir trabalhar amanhã ?</legend>
        <input type="radio" id="opt1" name="opcoes" value="Não">
        <label for="opt1">Não</label><br>

        <input type="radio" id="opt2" name="opcoes" value="Não, mas eu tenho boletos" checked>
        <label for="opt2">Não, mas eu tenho boletos (Padrão)</label><br>

        <input type="radio" id="opt3" name="opcoes" value="Sim>
        <label for="opt3">Sim</label><br>

        <button type="submit">Votar !</button>
    </fieldset>

    <!-- Se a sessão tiver o array 'opcoes', exibe o resultado logo abaixo -->
    @if (session('votado'))
        <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto mt-10">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Resultados Parciais</h3>
            <ul class="space-y-3">
                @foreach (session('opcoes') as $textoResposta => $totalVotos)
                    <li class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex justify-between items-center">
                        <span class="text-gray-700 font-medium">{{ $textoResposta }}</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                            {{ $totalVotos }} {{ $totalVotos == 1 ? 'voto' : 'votos' }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
