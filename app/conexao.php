<?php
$host = "database";  
$username = "root";
$password = "1234";
$database = "projetodio_db";

$conexao = new mysqli($host, $username, $password, $database);

if ($conexao->connect_error) {
    echo "Erro ao conectar com MySQL:<br>";
    echo "Código do erro: " . $conexao->connect_errno . "<br>";
    echo "Mensagem do erro: " . $conexao->connect_error . "<br>";
    exit;
}

echo "Conexão com banco de dados OK<br>";

$conexao->close();
?>
