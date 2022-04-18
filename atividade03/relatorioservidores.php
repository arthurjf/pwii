<?php include("bancoservidores.php");

$remover = isset($_GET['remover']);
?>

<h1>Servidores</h1>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>NOME</b></td>
        <td><b>CPF</b></td>
        <td><b>EMAIL</b></td>
    </tr>

    <?php
    $servidores = listaServidores($conexao);

    foreach ($servidores as $servidor) {
    ?>
        <tr>
            <td><?= $servidor['nome'] ?></td>
            <td><?= $servidor['cpf'] ?></td>
            <td><?= $servidor['email'] ?></td>
            <?php if ($remover == 'true') {
            ?>
                <td>
                    <a href="removeservidor.php?id=<?= $servidor['id'] ?>" class="text-danger"> remover</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>

</table>