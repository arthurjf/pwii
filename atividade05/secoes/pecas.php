<?php
include_once("classes/manipuladados.php");

$busca = new manipuladados();
$busca->setTable("tb_produtos");
// TODO: Mudar o index de 1 (carretas) para 2 (peças) na linha abaixo
$resultado = $busca->getAllProdutos(1);
?>

<section class="container h-100">
    <div class="pecas">
        <h3 class="titulo">Peças</h3>
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