<section>
    <h1 class="pt-3 pb-3">Adicionar Banner</h1>
    <form action="controller/modificabanner.php" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label>Banner para ser mostrado na home: </label>
            <input type="file" class="form-control-file" name="arquivo" />
        </div>
        <button type="submit" name="botao" value="insert" class="btn btn-primary">Cadastrar Banner</button>
    </form>
</section>