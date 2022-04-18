<?php include("bancoaluno.php"); 

$remover = isset($_GET['remover']);
?>

<h1>Alunos</h1>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>MATRÍCULA</b></td>
        <td><b>NOME</b></td>
        <td><b>CPF</b></td>
    </tr>

    <?php
    $alunos = listaAlunos($conexao);

    foreach ($alunos as $aluno) {
    ?>
        <tr>
            <td><?= $aluno['id'] ?></td>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['cpf'] ?></td>
            <?php if ($remover == 'true') {
            ?>
                <td>
                    <a href="removealuno.php?id=<?= $aluno['id'] ?>" class="text-danger"> remover</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    }
    ?>

</table>