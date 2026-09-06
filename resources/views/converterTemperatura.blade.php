<h2>
    @if ($operacao == 1)
        {{ $temperatura }}°C = {{ $resultado }}°F
    @endif

    @if ($operacao == 2)
        {{ $temperatura }}°F = {{ $resultado }}°C
    @endif
</h2>
