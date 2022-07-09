<?php
$_POST = $_SESSION;

$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$idCategoria = $_POST['txtCategoriaId'];
$descricao = $_POST['txtDescricao'];
$preco = $_POST['txtPreco'];
$url = $_POST['txtUrl'];

$manipula = new manipuladados();

$manipula->setTable("tb_categoriaprodutos");
$manipula->setFields("id, nome");
$categorias = $manipula->getAllDataTable();
?>

<section>
    <h1 class="text-center p-3">Alterar Produto</h1>
    <form action="controller/modificaproduto.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtId" value="<?= $id ?>" />

        <div class="form-group mb-3">
            <label>Categoria</label>
            <select class="form-select" name="txtCategoriaId">
                <?php
                foreach ($categorias as $categoria) {
                    if ($idCategoria == $categoria["id"]) {
                ?>
                        <option value="<?= $categoria["id"] ?>" selected><?= $categoria["nome"] ?></option>
                    <?php
                    } else {
                    ?>
                        <option value="<?= $categoria["id"] ?>"><?= $categoria["nome"] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Nome</label>
            <input type="name" class="form-control" placeholder="Digite o nome do produto" name="txtNome" value="<?= $nome ?>" />
        </div>

        <div class="form-group mb-3">
            <label>Descrição</label>
            <input type="" class="form-control" placeholder="Digite a descrição do produto" name="txtDescricao" value="<?= $descricao ?>" />
        </div>

        <div class="form-group mb-3">
            <label>Preço</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                </div>
                <input type="number" class="form-control" placeholder="Digite o preço do produto" name="txtPreco" value="<?= $preco ?>" />
            </div>
        </div>

        <div class="form-group mb-3">
            <label>Imagem do Produto</label>
            <input type="file" class="form-control-file" name="arquivo" value="<?= $url ?>" />
        </div>

        <button type="submit" name="botao" value="update" class="btn btn-primary">Alterar Produto</button>
        <button type="submit" name="botao" value="delete" class="btn btn-outline-danger">Deletar Produto</button>
    </form>
</section>