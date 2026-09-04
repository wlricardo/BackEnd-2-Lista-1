<form action="/verificar-dados" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>Email:</label>
    <input type="mailto" name="email"><br>

    <label>Senha:</label><br>
    <input type="text" name="senha"><br>

    <label>Confirmar Senha:</label><br>
    <input type="text" name="confirmarSenha"><br>

    <button type="submit">Enviar</button>
</form>
