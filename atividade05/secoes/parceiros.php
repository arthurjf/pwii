<?php
include_once("classes/manipuladados.php");
include_once("classes/util.php");

$busca = new manipuladados();
$busca->setTable("tb_produtos");
$busca->setTable("tb_parceiros");
$resultado = $busca->getAllDataTable();
?>

<div class="container">
    <section class="parceiro">
        <h2 class="p-5 text-center fw-bold">Nossos Parceiros</h2>
        <div class="row justify-content-between">
            <?php foreach ($resultado as $dados) { ?>
                <article class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-0" style="width: 23rem;">
                        <img class="card-img-top" src="<?= $dados["url"] ?>" alt="Card image cap">
                        <div class="card-body fw-bold">
                            <h5 class="card-title fw-bold"><?= $dados["nome"] ?></h5>
                            <?php if (isNullOrEmptyString($dados["endereco"])) ?>
                            <p class="card-text fw-normal"><?= $dados["endereco"] ?></p>
                            <?php if (isNullOrEmptyString($dados["telefone"])) ?>
                            <p class="card-text fw-normal"><?= $dados["telefone"] ?></p>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
</div>
</section>