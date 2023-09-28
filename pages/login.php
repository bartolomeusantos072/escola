<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "usuario@gmail.com" && $password === "123456") {
        header("Location: site_escola.php"); 
        exit;
    } else {
        echo "<script>alert('Credenciais inválidas. Tente novamente.');</script>";
    }
}
?>
