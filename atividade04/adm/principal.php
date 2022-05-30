<?php

include_once("validarcookie.php");
include_once("../classes/verurl.php");

?>

<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
</head>

<body>
    <header>
        <?php include("../includes/topo.php"); ?>
    </header>
    <nav>
        <?php include("../includes/menu.php"); ?>
    </nav>
    <section>
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