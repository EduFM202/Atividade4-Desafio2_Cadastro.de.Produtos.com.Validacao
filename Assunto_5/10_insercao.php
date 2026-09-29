<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>

    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required><br>

        <label for="email">e-mail: </label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];

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
        $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";

        // Verifica se os dados foram cadastros no banco de dados
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: darkgreen;'>Cliente cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao cadastrar!</p>";
        }
    }
    ?>

</body>
</html>