<?php include("bancomotoristas.php");

$remover = isset($_GET['remover']);
?>

<h1>MOTORISTAS</h1>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>NOME</b></td>
        <td><b>CPF</b></td>
        <td><b>TELEFONE</b></td>
    </tr>

    <?php
    $motoristas = listaMotoristas($conexao);

    foreach ($motoristas as $motorista) {
    ?>
        <tr>
            <td><?= $motorista['nome'] ?></td>
            <td><?= $motorista['cpf'] ?></td>
            <td><?= $motorista['telefone'] ?></td>
            <?php if ($remover == 'true') {
            ?>
                <td>
                    <a href="removemotorista.php?id=<?= $motorista['id'] ?>" class="text-danger"> remover</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>

</table>