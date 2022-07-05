<?php
$_POST = $_SESSION;

$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefone'];
$url = $_POST['txtUrl'];
?>

<section>
    <h1 class="text-center p-3">Alterar Parceiro</h1>
    <form action="controller/alterarparceiro.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtId" value="<?= $id ?>" />
        <div class="form-group mb-3">
            <label>Nome</label>
            <input type="name" class="form-control" placeholder="Digite o nome do parceiro" name="txtNome" value="<?= $nome ?>" required />
        </div>
        <div class="form-group mb-3">
            <label>Endereço</label>
            <input type="" class="form-control" placeholder="Digite o endereço do parceiro" name="txtEndereco" value="<?= $endereco ?>" />
        </div>
        <div class="form-group mb-3">
            <label>Telefone</label>
            <input type="" class="form-control" placeholder="Digite o telefone do parceiro" name="txtTelefone" value="<?= $telefone ?>" />
        </div>
        <div class="form-group mb-3">
            <label>Logo do Parceiro</label>
            <input type="file" class="form-control-file" name="arquivo" value="<?= $url ?>" />
        </div>
        <button type="submit" name="botao" value="editar" class="btn btn-primary">Alterar Parceiro</button>
        <button type="submit" name="botao" value="deletar" class="btn btn-outline-danger">Deletar Parceiro</button>
    </form>
</section>