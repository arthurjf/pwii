<?php
include("conecta.php");
include("bancomotoristas.php");

$id = $_GET['id'];
removeMotorista($conexao, $id);

header("Location: telarelatorios.php?removido=true");
die();
