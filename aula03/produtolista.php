<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");
?>

<table class="table table-striped table-bordered">

    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $coisa) {
    ?>
        <tr>
            <td><?= $coisa['nome'] ?></td>
            <td><?= $coisa['preco'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>

<?php include("rodape.php");
