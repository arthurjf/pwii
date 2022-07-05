<?php
include_once("../classes/manipuladados.php");
?>

<section>
    <h1 class="text-center p-3">Adicionar Parceiro</h1>
    <form action="controller/cadastrarparceiro.php" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label>Nome</label>
            <input type="name" class="form-control" placeholder="Digite o nome do parceiro" name="txtNome" required />
        </div>
        <div class="form-group mb-3">
            <label>Endereço</label>
            <input type="" class="form-control" placeholder="Digite o endereço do parceiro" name="txtEndereco" />
        </div>
        <div class="form-group mb-3">
            <label>Telefone</label>
            <input type="" class="form-control" placeholder="Digite o telefone do parceiro" name="txtTelefone" />
        </div>
        <div class="form-group mb-3">
            <label>Logo do Parceiro</label>
            <input type="file" class="form-control-file" name="arquivo" required />
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Parceiro</button>
    </form>
</section>