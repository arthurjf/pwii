<?php include("verificalogin.php");
include("conecta.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("bancoescolas.php");

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];

if (insereEscola($conexao, $nome, $endereco)) {
?>
    <p class="alert alert-success">Escola
        <?= $nome; ?>, <?= $endereco; ?> adicionada com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">A escola <?= $nome ?>, <?= $endereco; ?>
        não foi adicionada: <?= $msg ?></p>
<?php
}
?>