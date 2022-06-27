<?php
include_once("classes/manipuladados.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
    <script src='js/bootstrap.bundle.js'></script>
</head>

<body>
    <section>
        <?php
        $busca = new manipuladados();
        $busca->setTable("tb_noticias");
        $resultado = $busca->getAllDataTable();
        $noticias = $busca->getAllDataTable();
        foreach ($noticias as $dados) {
        ?>
            <article class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $dados["url"]; ?>" class="img-fluid rounded-start" alt="..." width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><?= $dados["titulo"]; ?></h3>
                            <p class="card-text"><?= $dados["descricao"]; ?></p>
                        </div>
                    </div>
                </div>
            </article>
        <?php }  ?>
    </section>

</body>

</html>