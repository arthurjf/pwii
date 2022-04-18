<?php
include("conecta.php");
include("bancoescolas.php");

$id = $_GET['id'];
removeEscola($conexao, $id);

header("Location: telarelatorios.php?removido=true");
die();
