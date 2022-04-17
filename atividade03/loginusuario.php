<?php session_start();
include("cabecalho.php");
include("conecta.php");
include("bancousuario.php");

$email = $_GET["email"];
$senha = $_GET["senha"];

if ($usuario = conectaUsuario($conexao, $email, $senha)) {
    $_SESSION['usuario'] = $usuario;

    header('Location: telaprincipal.php');
    exit();
?>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">Login falhou: <?= $msg ?></p>
<?php
}
?>
<?php include("rodape.php"); ?>