<?php include("verificalogin.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");

?>

<div class="principal">
    <form action="adicionaescola.php">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input class="form-control" type="text" name="endereco" /></td>
            </tr>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
            </tr>
        </table>
    </form>
</div>


<?php include("rodape.php"); ?>