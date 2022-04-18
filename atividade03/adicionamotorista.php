<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("bancomotoristas.php");

$usuariosid = $_GET["usuariosid"];

if (insereMotorista($conexao, $usuariosid)) {
?>
    <p class="alert alert-success">Motorista
        <?= $usuariosid; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O motorista <?= $usuariosid; ?>
        não foi adicionada: <?= $msg ?></p>
<?php
}
?>