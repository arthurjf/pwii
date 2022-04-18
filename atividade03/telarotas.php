<?php include("verificalogin.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");

?>

<div class="principal">
    <form action="adicionarota.php">
        <table class="table">
            <tr>
                <td>Rota</td>
                <td><input class="form-control" type="text" name="rota" /></td>
            </tr>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
            </tr>
        </table>
    </form>
</div>


<?php include("rodape.php"); ?>