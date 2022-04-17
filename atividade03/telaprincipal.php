<?php include("verificalogin.php");
include("cabecalho.php");
include("barrahorizontal.php"); ?>

<div class="telaprincipal">
    <?php
    include("barralateral.php"); ?>
    <div class="telaprincipal-direita">
        <div class="telaprincipal-caixas">
            <ul>
                <?php include("listarmodulos.php"); ?>
            </ul>
        </div>
    </div>
</div>

<?php include("rodape.php"); ?>