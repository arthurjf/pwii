<section>
    <h1 class="pt-3 pb-3">Adicionar Parceiro</h1>
    <form action="controller/modificaparceiro.php" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label>Nome</label>
            <input type="name" class="form-control" placeholder="Digite o nome do parceiro" name="txtNome" />
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
            <input type="file" class="form-control-file" name="arquivo" />
        </div>
        <button type="submit" name="botao" value="insert" class="btn btn-primary">Cadastrar Parceiro</button>
    </form>
</section>