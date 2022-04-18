<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("bancoaluno.php");

$usuariosid = $_GET["usuariosid"];

if (insereAluno($conexao, $usuariosid)) {
?>
    <p class="alert alert-success">Aluno
        <?= $usuariosid; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O aluno <?= $usuariosid; ?>
        não foi adicionado: <?= $msg ?></p>
<?php
}
?>