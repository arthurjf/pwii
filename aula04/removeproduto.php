<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");

$id = $_GET['id'];
removeproduto($conexao, $id);

header("Location: produtolista.php?removido=true");
die();
?>