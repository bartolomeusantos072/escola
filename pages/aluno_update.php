<?php
include('config.php');

$dados = $_POST;

$sql = "UPDATE aluno SET nome_alu = ?, sexo_al = ?, cidade_alu = ?, telefone_alu = ?, email_alu = ? WHERE id_alu = ?";

$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    
    mysqli_stmt_bind_param($stmt, 'sssssi', $dados['nome_alu'], $dados['sexo_alu'], $dados['cidade_alu'], $dados['telefone_alu'], $dados['email_alu'], $dados['id_alu']);

    
    if (mysqli_stmt_execute($stmt)) {
        echo 'Registro alterado com sucesso.';
    } else {
        echo 'Erro ao alterar registro: ' . mysqli_error($conn);
    }

   
    mysqli_stmt_close($stmt);
} else {
    echo 'Erro na preparação da consulta: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
