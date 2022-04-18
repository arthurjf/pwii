<?php
include("conecta.php");
include("bancofrota.php");

$id = $_GET['id'];
removeVeiculo($conexao, $id);

header("Location: telarelatorios.php?removido=true");
die();
