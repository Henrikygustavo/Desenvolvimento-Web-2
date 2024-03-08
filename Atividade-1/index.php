<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercíocios 1 e 2</title>
<head>
</head>

<body>

<h2>Exercíocios 1 e 2</h2>

<form action="processa.php" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <br>
        <input type="tel" id="telefone" name="telefone" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <br>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="mensagem">Mensagem:</label>
        <br>
        <textarea id="mensagem" name="mensagem" required></textarea>
    </div>
    <button type="submit">Enviar</button>
</form>

</body>
</html>
