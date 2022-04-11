<head>
    <link href="css/login.css" rel="stylesheet">
</head>

<div class="login-painel">
    <div class="login-caixas">
        <h3>Faça Login</h3>
        <form action="loginusuario.php">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="email" name="email" required /></td>
                </tr>

                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha" required /></td>
                </tr>

                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Logar" /></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="login-elemento">
        <a type="button" class="btn btn-link" href="telacadastrousuario.php">Criar nova conta</a>
    </div>
</div>