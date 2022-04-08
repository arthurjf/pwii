<?php include("cabecalho.php"); ?>
<h1>Cadastrar Usuário</h1>

<form action="adicionausuario.php">
    <table class="table">
        <tr>
            <td>Nome Completo</td>
            <td><input class="form-control" type="text" name="nome" required /></td>
        </tr>

        <tr>
            <td>Telefone</td>
            <td><input class="form-control" type="tel" name="telefone" /></td>
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

<?php include("rodape.php"); ?>