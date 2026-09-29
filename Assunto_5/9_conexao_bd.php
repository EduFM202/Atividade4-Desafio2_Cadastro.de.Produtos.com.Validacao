<?php
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";

try {
    // Tenta criar conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Falha na conexão: " . $conn->connect_error);
    }

    // MEnsagem de teste de conexão
    echo "Conexão bem-sucedida!";

} catch (Exception $e) {
    // Exibe uma mensagem de erro "amigável"
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>