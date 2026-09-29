<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒 Desafio 2</title>
</head>
<body>
    <h1>Cadastro de Produtos com Validação</h1>

    <form action="" method="post">
        <label for="nome">Produto: </label>
        <input type="text" name="nome" required><br>

        <label for="preco">Preço: </label>
        <input type="number" step="0.01" name="preco" required><br><br>

        <button type="submit">Cadastrar Produto</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];

        // Validação do preço
        if ($preco <= 0) {
            echo "<p style='color: red;'>Erro: O preço deve ser maior que zero!</p>";
        } else {
            // Conecta com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exercicio";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Insere os dados no banco de dados
            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

            // Verifica se os dados foram cadastrados no banco de dados
            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: darkgreen;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar produto!</p>";
            }
        }
    }
    ?>
</body>
</html>