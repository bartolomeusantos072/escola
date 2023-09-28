<?php
include('menu.php');

if (!empty($_GET['id'])) {
    include('config.php');

    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM aluno WHERE id_alu='{$id}'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        $id = $row['id_alu'];
        $nome = $row['nome_alu'];
        $sexo = $row['sexo_al'];
        $cidade = $row['cidade_alu'];
        $telefone = $row['tel_alu'];
        $email = $row['email_alu'];
    } else {
        echo "Erro na consulta: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<section class="page">
   
    <form enctype="multipart/form-data" method="post" action="aluno_update.php" >
        <label>código</label>
        <input name="id" readonly="1" type="text" style="width:30%" value="<?=$id?>">
        <label>Nome</label>
        <input name="nome" type="text" style="width:50%" value="<?=$nome?>" >
        <label>sexo</label>
        <input name="sexo" type="text" style="width:30%" value="<?=$sexo?>">
        <label>Cidade</label>
        <input name="cidade" type="text" style="width:50%" value="<?=$cidade?>">
        <label>telefone</label>
        <input name="telefone" type="text" style="width:25%" value="<?=$telefone?>">
        <label>email</label>
        <input name="email" type="text" style="width:50%" value="<?=$email?>">
        <input type="submit" style="width:25%">
    </form>
</section>
</body>
</html>
