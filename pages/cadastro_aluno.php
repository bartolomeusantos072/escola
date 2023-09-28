

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>
<body>
<?php
include('config.php');
include('menu.php');
?>    
<section class="page">
    
    <form enctype="multipart/form-data" method="post" action="aluno_insert.php" >
        <label>código</label>
        <input name ="id" readonly="1" type="text" style="width:30%">
        <label>Nome</label>
        <input name ="nome" type="text" style="width:50%">
        <label>sexo</label>
        <input name ="sexo" type="text" style="width:30%">
        <label>Cidade</label>
        <input name ="cidade" type="text" style="width:50%">
        <label>telefone</label>
        <input name ="telefone" type="text" style="width:25%">
        <label>email</label>
        <input name ="email" type="text" style="width:50%">
        <input  type="submit" style="width:25%">
    </form>
</section>
<body>
</html>