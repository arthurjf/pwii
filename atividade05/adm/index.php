<?php

?>

<!DOCTYPE html>
<html class="h-100 login">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Coopercred Implementos Rodoviários - Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon.png">
    <script src='../js/bootstrap.bundle.js'></script>
</head>

<body class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="col-lg-3 col-md-6 col-sm-12 painel">
                <h2 class="titulo">Login</h2>
                <p class="subtitulo">Insira o nome e senha do administrador</p>
                <form>
                    </p>
                    <p><input type="text" name="txtNome" placeholder="Nome" required /></p>
                    <p><input type="password" name="txtSenha" placeholder="Senha" required /></p>
                    <p><input class="btn-logar" type="submit" value="Entrar" /></p>
                </form>
                <p><a href="../index.php"><button class="btn-cancelar">Cancelar</button></a></p>
                <p class="criarconta">Ainda não tem conta? <a href="">Registre aqui</a></p>
            </div>
        </div>
    </div>
</body>

</html>