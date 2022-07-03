<div class="container h-100 registrar">
    <div class="row justify-content-md-center h-100">
        <div class="col-lg-3 col-md-6 col-sm-12 painel">
            <h2 class="titulo">Registrar</h2>
            <p class="subtitulo">Preencha os campos abaixo para criar uma conta de administrador</p>
            <form method="post" action="registrar.php">
                </p>
                <p>E-mail</p>
                <p><input type="email" name="txtEmail" placeholder="Exemplo@123" required /></p>
                <p>Nome</p>
                <p><input type="text" name="txtNome" placeholder="Exemplo" required /></p>
                <p>Senha</p>
                <p><input type="password" name="txtSenha" required /></p>
                <p><input class="btn-logar" type="submit" value="Registrar" /></p>
            </form>
            <p><a href="../index.php"><button class="btn-cancelar">Cancelar</button></a></p>
            <p class="criarconta">Já tem uma conta? <a href="?secao=login">Então logue aqui</a></p>
        </div>
    </div>
</div>