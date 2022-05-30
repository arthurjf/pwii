<?php

include_once("validarcookie.php");
include_once("../classes/verurl.php");

?>

<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <script src='js/bootstrap.bundle.js'></script>
</head>

<body>
    <header>
        <?php include("../includes/topo.php"); ?>
    </header>
    <nav>
        <?php include("../includes/menu.php"); ?>
    </nav>
    <section class="container-fluid">
        <h1>Página Principal</h1>
        <article>
            <?php
            $red = new verurl();
            $red->trocarUrl(@$_GET['secao']);
            ?>
        </article>
    </section>
    <footer>
        <?php include("../includes/rodape.php"); ?>
    </footer>
</body>

</html>