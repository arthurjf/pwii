<?php include("cabecalho.php"); ?>
<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";

$conexao = mysqli_connect('localhost', 'root', '', 'estoque');

if (mysqli_query($conexao, $query)) {
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