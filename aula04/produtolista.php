<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">

    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $coisa) {
    ?>
        <tr>
            <td><?= $coisa['nome'] ?></td>
            <td><?= $coisa['preco'] ?></td>
            <td>
                <a href="removeproduto.php?id=<?= $coisa['id'] ?>" class="text-danger"> remover</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>

<?php include("rodape.php");
