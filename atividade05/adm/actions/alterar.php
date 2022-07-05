<?php
session_start();
$_SESSION = $_POST;
$secao = $_SESSION['secao'];

header("location: ../principal.php?secao=$secao");
exit();
