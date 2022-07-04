<?php
include_once("validarcookie.php");
include_once("classes/verurl.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Coopercred Implementos Rodoviários - Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon.png">
    <script src='../js/bootstrap.bundle.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src='../js/navbarselect.js'></script>
</head>

<body>
    <div class="d-flex flex-column flex-md-row h-100">
        <?php
        include_once("includes/menulateral.php");
        ?>
        <main class="pt-3 pt-md-1 ps-1 pe-1 pe-md-5 ps-md-5 flex-grow-1 h-100">
            <?php
            $red = new verurl();
            $red->trocarUrl(@$_GET['secao']);
            ?>
        </main>
    </div>
</body>

</html>