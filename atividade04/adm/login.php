<?php
include_once("../classes/conexao.php");
new Conexao();

$login = $_Post['txtEmail'];
$senha = $_Post['txtSenha'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$login' AND senha = '$senha';";

$query = mysqli_query($conn, $sql);

$linhas =  @mysqli_num_rows($query);

if($linhas == 0){
echo '<script>alert("Email ou senha do Admin não cadastrada ou incorreta")</script>';
echo "<script>location = 'index.php';</script>";
}else{
echo "<script>location = 'secoes/telacadastro.php';</script>";
}
?>