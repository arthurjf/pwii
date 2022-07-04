<?php
include_once("classes/manipuladados.php");

$busca = new manipuladados();
$busca->setTable("tb_produtos");
$resultado = $busca->getAllProdutos(1);
?>

<section class="container">
    <div class="carretas">
        <h3 class="titulo">Carretas</h3>
        <div class="row justify-content-between">
            <?php foreach ($resultado as $dados) { ?>
                <article class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-0" style="width: 22rem;">
                        <img class="card-img-top" src="<?= $dados["url"] ?>" alt="Produto">
                        <div class="card-body fw-bold">
                            <h5 class="card-title fw-bold"><?= $dados["nome"]; ?></h5>
                            <p class="card-text preco fw-bold">R$<?= $dados["preco"]; ?></p>
                        </div>
                    </div>
                </article>
            <?php
            } ?>
        </div>
    </div>
</section>