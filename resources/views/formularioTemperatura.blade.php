<form action="/converter" method="POST">
    @csrf
    <h2>Conversor de temperatura</h2>
    <label for="temperatura">Temperatura: </label>
    <input type="text" name="temperatura"><br>

    <select name="operacao">
        <option value="1">Celsius -> Fahrenheit</option>
        <option value="2">Fahrenheit -> Celsius</option>
    </select>

    <button type="submit">Converter</button>
</form>
