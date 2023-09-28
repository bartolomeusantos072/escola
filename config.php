<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$database = "escola";

// Estabeleça a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifique a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
