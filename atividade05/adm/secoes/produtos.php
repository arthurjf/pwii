<?php
include_once("../classes/manipuladados.php");

$manipula = new manipuladados();

$manipula->setTable("tb_produtos");
$manipula->setFields("id, nome, descricao, preco, url, id_categorias");

$produtos = $manipula->getAllProdutos();
?>

<section>
    <h1 class="text-center p-3">Produtos</h1>
    <table class="table table-hover thead-dark">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricao</th>
                <th scope="col">Preço</th>
                <th scope="col">Imagem</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $produto) {
            ?>
                <tr>
                    <th class="align-middle" scope="row"><?= $produto["id"] ?></th>
                    <th class="align-middle" scope="row"><?= $produto["categoria_nome"] ?></th>
                    <td class="align-middle"><?= $produto["nome"] ?></td>
                    <td class="align-middle"><?= $produto["descricao"] ?></td>
                    <td class="align-middle"><?= $produto["preco"] ?></td>
                    <td class="align-middle"><img src="../<?= $produto["url"] ?>" style="width: 90px; height: auto;" /></td>
                    <td class="align-middle">
                        <form action="actions/alterar.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="txtId" value="<?= $produto["id"] ?>" />
                            <input type="hidden" name="txtNome" value="<?= $produto["nome"] ?>" />
                            <input type="hidden" name="txtDescricao" value="<?= $produto["descricao"] ?>" />
                            <input type="hidden" name="txtPreco" value="<?= $produto["preco"] ?>" />
                            <input type="hidden" name="txtUrl" value="<?= $produto["url"] ?>" />
                            <input type="hidden" name="txtCategoriaId" value="<?= $produto["id_categorias"] ?>" />
                            <input type="hidden" name="secao" value="alterarproduto" />
                            <a class="w-100">
                                <button type="submit" class="btn btn-primary w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg> Alterar</button>
                            </a>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="7">
                    <a href="?secao=adicionarproduto" class="w-100">
                        <button type="button" class="btn btn-success w-100" style="max-width: 200px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Adicionar Produto
                        </button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</section>