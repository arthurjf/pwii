<?php

?>

<html>

<head>
    <title>Visualizar Noticias</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Tela de Visualizar Notícias</h1>
        <?php
        $busca = new manipuladados();
        $busca->setTable("tb_noticias");
        $resultado = $busca->getAllDataTable();
        $noticias = $busca->getAllDataTable();
        foreach ($noticias as $dados) {
        ?>
            <form action="secoes/modificarnoticia.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="txtId" value="<?= $dados["id"] ?>" />
                <input type="hidden" name="txtTitulo" value="<?= $dados["titulo"] ?>" />
                <input type="hidden" name="txtDescricao" value="<?= $dados["descricao"] ?>" />
                <input type="hidden" name="txtUrl" value="<?= $dados["url"] ?>" />
                <div>
                    <div>
                        <img class="w-50 h-20 p-3" src="../<?= $dados["url"]; ?>">
                    </div>
                    <div>
                        <div class="card-body">
                            <h3 class="card-title"><?= $dados["titulo"]; ?></h3>
                            <p class="card-text"><?= $dados["descricao"]; ?></p>
                            <p>
                                <button type="submit" name="botao" value="editar" class="btn btn-lg btn-primary">Editar</button>
                                <button type="submit" name="botao" value="excluir" class="btn btn-lg btn-danger">Deletar</button>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        <?php }  ?>
    </div>
</body>

</html>