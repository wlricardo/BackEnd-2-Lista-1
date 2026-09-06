<form action="/verificar-cpf" method="POST">
    @csrf
    <label for="cpf">Insira o CPF: </label>
    <input type="text" name="cpf" placeholder="Inserir CPF">

    <button type="submit">Verificar CPF</button>
</form>
