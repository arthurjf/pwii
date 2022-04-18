<?php include("verificalogin.php");
include("cabecalho.php");
include("barrahorizontal.php");
include("barralateral.php");
include("conecta.php");
include("bancousuario.php");

$usuarios = listaUsuarios($conexao);

?>

<div class="principal">
    <form action="adicionaaluno.php">
        <table class="table">
            <tr>
                <td>Usuario</td>
                <td class="form-control">
                    <select name="usuariosid">
                        <?php
                        foreach ($usuarios as $usuario) { ?>
                            <option value="<?= $usuario['id'] ?>"><?= $usuario['nome'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
            </tr>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
            </tr>
        </table>
    </form>
</div>


<?php include("rodape.php"); ?>