<?php
include_once("autenticacao/classes/verurl.php");
?>

<!DOCTYPE html>
<html class="h-100 autenticacao">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Coopercred Implementos Rodoviários - Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon.png">
    <script src='../js/bootstrap.bundle.js'></script>
</head>

<body class="h-100">
    <?php
    $red = new verurl();
    $red->trocarUrl(@$_GET['secao']);
    ?>
</body>

</html>