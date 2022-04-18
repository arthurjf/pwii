<?php include("bancorotas.php");

$remover = isset($_GET['remover']);
?>

<h1>Rotas</h1>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>Rota</b></td>
    </tr>

    <?php
    $rotas = listaRotas($conexao);

    foreach ($rotas as $rota) {
    ?>
        <tr>
            <td><?= $rota['rota'] ?></td>
            <?php if ($remover == 'true') {
            ?>
                <td>
                    <a href="removerota.php?id=<?= $rota['id'] ?>" class="text-danger"> remover</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>

</table>