<div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto mt-10">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Resultados da Enquete</h3>

    <ul class="space-y-3">
        @foreach ($opcoes as $textoResposta => $totalVotos)
            <li class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex justify-between items-center">
                <!-- Exibe o índice (ex: "Não, mas eu tenho boletos") -->
                <span class="text-gray-700 font-medium">{{ $textoResposta }}</span>

                <!-- Exibe o valor atribuído (ex: 45) -->
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                    {{ $totalVotos }} {{ $totalVotos == 1 ? 'voto' : 'votos' }}
                </span>
            </li>
        @endforeach
    </ul>
</div>
