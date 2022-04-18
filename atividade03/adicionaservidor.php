<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("bancoservidores.php");

$usuariosid = $_GET["usuariosid"];

if (insereServidor($conexao, $usuariosid)) {
?>
    <p class="alert alert-success">Servidor
        <?= $usuariosid; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O servidor <?= $usuariosid; ?>
        não foi adicionado: <?= $msg ?></p>
<?php
}
?>