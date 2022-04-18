<?php
include("conecta.php");
include("bancorotas.php");

$id = $_GET['id'];
removeRota($conexao, $id);

header("Location: telarelatorios.php?removido=true");
die();
