<?php

session_start();
$_POST = $_SESSION;

$id = $_POST['txtId'];
$titulo = $_POST['txtTitulo'];
$descricao = $_POST['txtDescricao'];
$url = $_POST['txtUrl'];

?>

<html>

<head>
    <title>Alterar Noticia</title>
</head>

<body>
    <h1>Tela de Formulário Alterar Notícia</h1>
    <form action="secoes/alterarNoticia.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtId" value="<?= $id ?>" />
        <label for="">Título:</label>
        <input type="text" name="txtTitulo" id="" value="<?= $titulo ?>"><br><br>
        <label for="">Descrição:</label> <br><br>
        <textarea name="txtDescricao" rows="10" cols="40"><?= $descricao ?></textarea> <br><br>

        <label>Foto:</label><br><br>
        <input type="file" name="arquivo" class="btn" value="<?= $url ?>"> <br><br>
        <input type="submit" value="Aplicar Alteração" class="btn btn-lg btn-primary">
        <input type="reset" value="Limpar" class="btn btn-lg btn-outline-danger">
    </form>
</body>

</html>