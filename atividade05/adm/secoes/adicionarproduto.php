<?php
include_once("../classes/manipuladados.php");

$manipula = new manipuladados();

$manipula->setTable("tb_categoriaprodutos");
$manipula->setFields("id, nome");
$categorias = $manipula->getAllDataTable();
?>

<section>
    <h1 class="text-center p-3">Adicionar Produto</h1>
    <form action="controller/modificaproduto.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtId" value="<?= $id ?>" />

        <div class="form-group mb-3">
            <label>Categoria</label>
            <select class="form-select" name="txtCategoriaId">
                <?php
                foreach ($categorias as $categoria) {
                ?>
                    <option value="<?= $categoria["id"] ?>"><?= $categoria["nome"] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Nome</label>
            <input type="name" class="form-control" placeholder="Digite o nome do produto" name="txtNome"" />
        </div>

        <div class=" form-group mb-3">
            <label>Descrição</label>
            <input type="" class="form-control" placeholder="Digite a descrição do produto" name="txtDescricao" />
        </div>

        <div class="form-group mb-3">
            <label>Preço</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                </div>
                <input type="number" class="form-control" placeholder="Digite o preço do produto" name="txtPreco" />
            </div>
        </div>

        <div class="form-group mb-3">
            <label>Imagem do Produto</label>
            <input type="file" class="form-control-file" name="arquivo" />
        </div>

        <button type="submit" name="botao" value="insert" class="btn btn-primary">Cadastrar Produto</button>
    </form>
</section>