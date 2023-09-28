<?php
include('config.php');

$dados = $_GET;

$sql = "DELETE FROM aluno WHERE id_alu = ?";

$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'i', $dados['id_alu']); 
    if (mysqli_stmt_execute($stmt)) {
        echo 'Registro excluído com sucesso.';
    } else {
        echo 'Erro ao excluir registro: ' . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo 'Erro na preparação da consulta: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
