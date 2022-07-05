<?php
$_POST = $_SESSION;

$id = $_POST['txtId'];
$url = $_POST['txtUrl'];
?>

<section>
    <h1 class="text-center p-3">Alterar Banner</h1>
    <form action="controller/modificabanner.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtId" value="<?= $id ?>" />
        <div class="form-group mb-3">
            <label><span class="fw-bold">ID do Banner:</span> <?= $id ?></label>
        </div>
        <div class="form-group mb-3">
            <label>Banner para ser mostrao na home: </label>
            <input type="file" class="form-control-file" name="arquivo" value="<?= $url ?>" />
        </div>
        <button type="submit" name="botao" value="update" class="btn btn-primary">Alterar Banner</button>
        <button type="submit" name="botao" value="delete" class="btn btn-outline-danger">Deletar Banner</button>
    </form>
</section>