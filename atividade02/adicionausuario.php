<?php include("cabecalho.php"); ?>
<?php
$nome = $_GET["nome"];
$email = $_GET["email"];
$senha = $_GET["senha"];
$telefone = $_GET["telefone"];

$query = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('{$nome}', '{$email}', '{$senha}', '{$telefone}')";

$conexao = mysqli_connect('localhost', 'root', '', 'atividadedois');

if (mysqli_query($conexao, $query)) {
?>
    <p class="alert alert-success">Usuário <?= $nome?> cadastrado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O cadastro de usuário falhou!</p>
<?php
}
?>
<?php include("rodape.php"); ?>