<?php

?>

<html>

<head>
    <title>formulário Noticia</title>
</head>

<body>
    <h1>Tela de Formulário Notícias</h1>
    <form action="secoes/cadastrarNoticia.php" method="post" enctype="multipart/form-data">
        <label for="">Título:</label>
        <input type="text" name="txttitulo" id=""><br><br>
        <label for="">Descrição:</label> <br><br>
        <textarea name="txtdescricao" rows="10" cols="40"></textarea> <br><br>

        <label>Foto:</label><br><br>
        <input type="file" name="arquivo"> <br><br>
        <input type="submit" value="Enviar" class="btn btn-lg btn-primary form-group">
        <input type="reset" value="Limpar" class="btn btn-lg btn-primary">
    </form>
</body>

</html>