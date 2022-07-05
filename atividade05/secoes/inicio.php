<?php
include_once("classes/manipuladados.php");

$busca = new manipuladados();
$busca->setTable("tb_banners");
$banners = $busca->getAllDataTable();
?>

<aside style="padding-top: 80px;">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <?php
            if (sizeof($banners) <= 0) { ?>
                <div class="carousel-item active">
                    <img src="imgbanners/banner_2.jpg" class="d-block w-100" alt="...">
                </div>
                <?php } else {
                $primeiro = $banners[0];
                foreach ($banners as $banner) {
                    if ($primeiro == $banner) { ?>
                        <div class="carousel-item active">
                            <img src="<?= $banner["url"] ?>" class="d-block w-100" alt="...">
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <img src="<?= $banner["url"] ?>" class="d-block w-100" alt="...">
                        </div>
            <?php }
                }
            } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="detalhe-banner d-none d-lg-block">
        <img src="img/detalheBanner.png" />
    </div>
</aside>
<section class="section-padding">
    <div class="container text-center">
        <div class="row justify-content-between">
            <h1 class="fw-bold">Conheça Nossos
                <span>Produtos</span>
            </h1>
            <h3>Carretas</h3>
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0" style="width: 22rem;">
                    <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                    <div class="card-body fw-bold">
                        <h5 class="card-title fw-bold">Baú Facchini 30 Paletes 2022 *Pronta Entrega*</h5>
                        <p class="card-text preco fw-bold">R$169.000,00</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-sm-12 col-md-auto">
                <div class="card border-0" style="width: 22rem;">
                    <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Baú Facchini 30 Paletes 2022 *Pronta Entrega*</h5>
                        <p class="card-text preco fw-bold">R$169.000,00</p>
                    </div>
            </article>
            <article class="col-lg-4 col-md-6 col-sm-12 col-md-auto">
                <div class="card border-0" style="width: 22rem;">
                    <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Baú Facchini 30 Paletes 2022 *Pronta Entrega*</h5>
                        <p class="card-text preco fw-bold">R$169.000,00</p>
                    </div>
            </article>
        </div>
    </div>
</section>
<div>
    <section class="container">
        <?php include_once("includes/sobre.php"); ?>
    </section>
</div>