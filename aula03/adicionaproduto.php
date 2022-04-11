<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("bancoproduto.php"); ?>
<?php

$nome = $_GET["nome"];
$preco = $_GET["preco"];

if (insereProduto($conexao, $nome, $preco)) {
?>
    <p class="alert alert-success">Produto
        <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O produto <?= $nome; ?>
        não foi adicionado: <?= $msg ?></p>
<?php
}
?>
<?php include("rodape.php"); ?>