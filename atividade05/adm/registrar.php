<?php

include_once("../classes/manipuladados.php");

$email = $_POST['txtEmail'];
$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

$cadastra = new manipuladados();
$cadastra->setTable("tb_usuarios");
$cadastra->setFields("email, nome, senha");
$cadastra->setDados("'$email', '$nome', '$senha'");
$cadastra->insert();

echo '<script> alert("' . $cadastra->getStatus() . '");</script>';
echo "<script> location = 'index.php';</script>";

?>