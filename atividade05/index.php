<?php
include_once("classes/verurl.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Coopercred Implementos Rodoviários</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <script src='js/bootstrap.bundle.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src='js/navbarselect.js'></script>
</head>

<body>
    <header>
        <?php include_once("includes/menu.php"); ?>
    </header>

    <?php
    $red = new verurl();
    $red->trocarUrl(@$_GET['secao']);
    ?>

    <footer>
        <?php include_once("includes/rodape.php"); ?>
    </footer>
</body>

</html>