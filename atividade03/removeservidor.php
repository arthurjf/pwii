<?php
include("conecta.php");
include("bancoservidores.php");

$id = $_GET['id'];
removeAluno($conexao, $id);

header("Location: telarelatorios.php?removido=true");
die();
