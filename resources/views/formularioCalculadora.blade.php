<form action="/converter" method="POST">
    @csrf
    <label>Primeiro valor: </label>
    <input type="text" name="numero1"><br>
    <label>Segundo valor: </label>
    <input type="text" name="numero2"><br>

    <label>Operação: </label><br>
    <input type="radio" name="operacao" value="+">
    <label for="+">+</label><br>
    <input type="radio" name="operacao" value="-">
    <label for="-">-</label><br>
    <input type="radio" name="operacao" value="*">
    <label for="*">*</label><br>
    <input type="radio" name="operacao" value="/">
    <label for="/">/</label><br>

    <button type="submit">Calcular</button>
</form>
