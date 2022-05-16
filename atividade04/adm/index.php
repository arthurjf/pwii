<?php
?>

<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="post" action="login.php">
        <p>
            <label>Nome:</label>
            <input type="text" name="txtNome" required />
        </p>
        <p>
            <label>Senha:</label>
            <input type="password" name="txtSenha" required />
        </p>
        <p>
            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">
        </p>
    </form>
</body>

</html>