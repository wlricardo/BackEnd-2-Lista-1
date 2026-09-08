<form action="calcular-imc" method="POST">
    @csrf

    <label>Altura (m): </label>
    <input type="text" name="altura"><br>
    <label>Peso: </label>
    <input type="text" name="peso"><br>

    <button type="submit">Calcular IMC</button>

</form>
