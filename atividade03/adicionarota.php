<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("bancorotas.php");

$rota = $_GET["rota"];

if (insereRota($conexao, $rota)) {
?>
    <p class="alert alert-success">Rota
        <?= $rota; ?> adicionada com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">A rota <?= $rota; ?>
        não foi adicionada: <?= $msg ?></p>
<?php
}
?>