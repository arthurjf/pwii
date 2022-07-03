<?php
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
</head>

<body>
    <div class="d-flex flex-column flex-md-row h-100">
        <?php
        include_once("includes/menulateral.php");
        ?>
        <main class="ps-0 ps-md-5 flex-grow-1">
            <?php
            $red = new verurl();
            $red->trocarUrl(@$_GET['secao']);
            ?>
        </main>
    </div>
</body>

</html>