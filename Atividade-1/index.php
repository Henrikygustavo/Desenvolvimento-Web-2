<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
  <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type=text], input[type=email], input[type=tel], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            opacity: 0.8;
        }
    </style> -->
</head>
<body>

<h2>Formulário de Contato</h2>

<form action="processa.php" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        <br>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
    </div>
    <button type="submit">Enviar</button>
</form>

</body>
</html>
