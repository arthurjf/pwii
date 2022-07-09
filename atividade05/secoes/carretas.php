<?php
include_once("classes/manipuladados.php");

$busca = new manipuladados();
$busca->setTable("tb_produtos");
$carretas = $busca->getAllProdutosFromCategory(2);
?>

<section class="container h-100">
    <div class="carretas">
        <h3 class="titulo">Carretas</h3>
        <div class="row justify-content-between">
            <?php foreach ($carretas as $carreta) { ?>
                <article class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-0" style="width: 22rem;">
                        <img class="card-img-top" src="<?= $carreta["url"] ?>" alt="Produto">
                        <div class="card-body fw-bold">
                            <h5 class="card-title fw-bold"><?= $carreta["nome"]; ?></h5>
                            <p class="card-text preco fw-bold">R$ <?= $carreta["preco"]; ?></p>
                        </div>
                    </div>
                </article>
            <?php
            } ?>
        </div>
    </div>
</section>