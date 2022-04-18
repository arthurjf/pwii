<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");

?>

<div class="principal">
    <div class="relatorios">

        <?php if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') { ?>
            <p class="alert-success">Apagado com sucesso!</p>
        <?php } ?>

        <?php include("relatorioaluno.php");
        include("relatoriofrota.php");
        include("relatoriomotoristas.php"); 
        include("relatorioescolas.php");
        include("relatorioservidores.php");
        include("relatoriorotas.php");
        ?>

        <?php if ($remover != 'true') {
        ?>
            <a href="telarelatorios.php?remover=true" class=text-danger>
                <h3>Remover</h1>
            </a>
        <?php } ?>
    </div>
</div>


<?php include("rodape.php"); ?>