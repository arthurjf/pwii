<div class="container h-100 registrar">
    <div class="row justify-content-md-center h-100">
        <div class="col-lg-3 col-md-6 col-sm-12 painel">
            <h2 class="titulo">Criar conta</h2>
            <p class="subtitulo">Registrar conta de administrador</p>
            <form method="post" action="registrar.php">
                </p>
                <p><input type="email" name="txtEmail" placeholder="E-mail" required /></p>
                <p><input type="text" name="txtNome" placeholder="Nome" required /></p>
                <p><input type="password" name="txtSenha" placeholder="Senha" required /></p>
                <p><input class="btn-submit" type="submit" value="Registrar" /></p>
            </form>
            <p><a href="../index.php"><button class="btn-cancelar">Cancelar</button></a></p>
            <p class="possui-conta">Já tem uma conta? <a href="?secao=login">Então logue aqui</a></p>
        </div>
    </div>
</div>