<?php

include('config.php');

$dados = $_POST;

$sql = "INSERT INTO aluno(nome_alu, cidade_alu, tel_alu, sexo_al, email_alu) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'sssss', $dados['nome'], $dados['cidade'], $dados['telefone'], $dados['sexo'], $dados['email']);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Erro na preparação da consulta: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
