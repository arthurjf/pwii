<?php include("cabecalho.php");
include("conecta.php");
include("bancousuario.php");

$nome = $_GET["nome"];
$telefone = $_GET["telefone"];
$cpf = $_GET["cpf"];
$nascimento = $_GET["datanascimento"];
$email = $_GET["email"];
$senha = $_GET["senha"];

if (insereUsuario($conexao, $nome, $telefone, $cpf, $nascimento, $email, $senha)) {
?>
    <div class="container">
        <div class="principal">
            <p class="alert alert-success">Usuário registrado com sucesso!</p>
            <a href="index.php">Clique aqui para voltar para a tela de login</a>
        </div>
    </div>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">Usuário falhou ao ser adicionado: <?= $msg ?></p>
<?php
}
?>
<?php include("rodape.php"); ?>