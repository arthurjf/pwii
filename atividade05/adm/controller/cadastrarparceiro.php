<?php
include_once("../../classes/manipuladados.php");

$nome = $_POST['txtNome'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefone'];
$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "imgparceiros/" . $nomearquivosalvo;
$urllocalsalvo = "../../imgparceiros/" . $nomearquivosalvo;

move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

$cadastra = new manipuladados();
$cadastra->setTable("tb_parceiros");
$cadastra->setFields("nome, endereco, telefone, url");
$cadastra->setDados("'$nome','$endereco','$telefone','$urlbanco'");
$cadastra->insert();

echo '<script> alert("' . $cadastra->getStatus() . '");</script>';
echo "<script> location = '../principal.php?secao=parceiros';</script>";
exit();