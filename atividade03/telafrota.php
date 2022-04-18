<?php include("verificalogin.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");

?>

<div class="principal">
    <form action="adicionafrota.php">
        <table class="table">
            <tr>
                <td>Placa</td>
                <td><input class="form-control" type="text" name="placa" /></td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td><input class="form-control" type="text" name="modelo" /></td>
            </tr>
            <tr>
                <td>Cor</td>
                <td><input class="form-control" type="text" name="cor" /></td>
            </tr>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
            </tr>
        </table>
    </form>
</div>


<?php include("rodape.php"); ?>