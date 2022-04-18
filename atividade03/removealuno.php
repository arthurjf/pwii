<?php
include("conecta.php");
include("bancoaluno.php");

$id = $_GET['id'];
removeAluno($conexao, $id);

header("Location: telarelatorios.php?removido=true");
die();
