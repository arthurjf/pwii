<?php include("bancofrota.php");

$remover = isset($_GET['remover']);
?>

<h1>Frota</h1>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>PLACA</b></td>
        <td><b>MODELO</b></td>
        <td><b>COR</b></td>
    </tr>

    <?php
    $frota = listaFrota($conexao);

    foreach ($frota as $veiculo) {
    ?>
        <tr>
            <td><?= $veiculo['placa'] ?></td>
            <td><?= $veiculo['modelo'] ?></td>
            <td><?= $veiculo['cor'] ?></td>
            <?php if ($remover == 'true') {
            ?>
                <td>
                    <a href="removefrota.php?id=<?= $veiculo['id'] ?>" class="text-danger"> remover</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>

</table>