<?php

?>

<html>

<head>
    <title>Visualizar Noticias</title>
</head>

<body>
    <h1>Tela de Visualizar Notícias</h1>
    <?php
    $busca = new manipuladados();
    $busca->setTable("tb_noticias");
    $resultado = $busca->getAllDataTable();
    $noticias = $busca->getAllDataTable();
    foreach ($noticias as $dados) {
    ?>
        <form action="modificarnoticia.php" method="post">
            <input type="hidden" name="txtId" value="<?= $dados["id"] ?>" />
            <input type="hidden" name="txtTitulo" value="<?= $dados["titulo"] ?>" />
            <input type="hidden" name="txtDescricao" value="<?= $dados["descricao"] ?>" />
            <input type="hidden" name="txtUrl" value="<?= $dados["url"] ?>" />
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../<?= $dados["url"]; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><?= $dados["titulo"]; ?></h3>
                        <p class="card-text"><?= $dados["descricao"]; ?></p>
                        <p>
                            <button type="submit" name="botao" value="editar">Editar</button>
                            <button type="submit" name="botao" value="excluir">Deletar</button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    <?php }  ?>
</body>

</html>