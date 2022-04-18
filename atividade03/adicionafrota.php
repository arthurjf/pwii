<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("bancofrota.php");

$placa = $_GET["placa"];
$modelo = $_GET["modelo"];
$cor = $_GET["cor"];

if (insereVeiculo($conexao, $placa, $modelo, $cor)) {
?>
    <p class="alert alert-success">Veículo
        <?= $placa; ?>, <?= $modelo ?>, <?= $cor; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O veículo <?= $placa; ?>, <?= $modelo ?>, <?= $cor; ?>
        não foi adicionada: <?= $msg ?></p>
<?php
}
?>