<?php
?>

<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <script src='js/bootstrap.bundle.js'></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form class="form-container form-group" method="post" action="login.php">
                            <p>
                                <label>Nome:</label>
                                <input type="text" name="txtNome" required />
                            </p>
                            <p>
                                <label>Senha:</label>
                                <input type="password" name="txtSenha" required />
                            </p>
                            <div class="text-center">
                                <p>
                                    <input type="submit" value="Entrar" class="btn btn-primary">
                                    <input type="reset" value="Limpar" class="btn btn-outline-danger">
                                </p>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>