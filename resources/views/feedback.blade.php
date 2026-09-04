<form action="/receber-dados" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>Email:</label>
    <input type="mailto" name="email"><br>

    <label>Comentário:</label><br>
    <textarea name="comentario" rows="4" cols="50" placeholder="Insira seu comentário aqui...">

    </textarea><br>

    <label for="avaliacao">Sua avaliação:</label>
    <select id="avaliacao" name="avaliacao">
        <option value="1">1 - Péssimo</option>
        <option value="2">2 - Ruim</option>
        <option value="3">3 - Regular</option>
        <option value="4">4 - Bom</option>
        <option value="5">5 - Ótimo</option>
    </select><br>

    <button type="submit">Enviar</button>
</form>
