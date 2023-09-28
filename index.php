<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <div class="page">
        <form id="login-form" method="post" action="pages/login.php"> 
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label> 
            <input type="text" id="username" name="username" required>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required> 
            <a href="/">Esqueci minha senha</a> 
            <input value="Acessar" class="btn" type="submit">
        </form>
    </div>
</body>

</html>
