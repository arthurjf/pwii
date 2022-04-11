<?php include("cabecalho.php");
include("conecta.php");
include("bancousuario.php");

$email = $_GET["email"];
$senha = $_GET["senha"];

if (conectaUsuario($conexao, $email, $senha)) {
?>
    <a class="alert alert-success">Login realizado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">Login falhou: <?= $msg ?></p>
<?php
}
?>
<?php include("rodape.php"); ?>