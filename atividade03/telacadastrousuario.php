<?php include("cabecalho.php"); ?>

<head>
    <link href="css/login.css" rel="stylesheet">
</head>

<div class="principal">

    <h1>Cadastrar Usuário</h1>

    <form action="adicionausuario.php">
        <table class="table">
            <tr>
                <td>Nome Completo</td>
                <td><input class="form-control" type="text" name="nome" required /></td>
            </tr>

            <tr>
                <td>Telefone</td>
                <td><input class="form-control" type="tel" name="telefone" required /></td>
            </tr>

            <tr>
                <td>CPF</td>
                <td><input class="form-control" type="text" name="cpf" required /></td>
            </tr>

            <tr>
                <td>Data Nascimento</td>
                <td><input class="form-control" type="date" name="datanascimento" required /></td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td><input class="form-control" type="email" name="email" required /></td>
            </tr>

            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha" required /></td>
            </tr>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
            </tr>
        </table>
    </form>

    <div class="login-caixas">
        <div class="login-elemento login-centralizado">
            <h3>Já tenho uma conta</h1>
                <a type="button" class="btn btn-link" href="index.php">Fazer login</a>
        </div>
    </div>

    <?php include("rodape.php"); ?>