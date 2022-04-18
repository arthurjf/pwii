<?php include("bancoescolas.php");

$remover = isset($_GET['remover']);
?>

<h1>ESCOLAS</h1>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>NOME</b></td>
        <td><b>ENDEREÇO</b></td>
    </tr>

    <?php
    $escolas = listaEscolas($conexao);

    foreach ($escolas as $escola) {
    ?>
        <tr>
            <td><?= $escola['nome'] ?></td>
            <td><?= $escola['endereco'] ?></td>
            <?php if ($remover == 'true') {
            ?>
                <td>
                    <a href="removeescola.php?id=<?= $escola['id'] ?>" class="text-danger"> remover</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>

</table>