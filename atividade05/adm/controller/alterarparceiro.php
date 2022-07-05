<?php
include_once("../../classes/manipuladados.php");

$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefone'];
$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "imgparceiros/" . $nomearquivosalvo;
$urllocalsalvo = "../../imgparceiros/" . $nomearquivosalvo;
$botao = $_POST['botao'];

move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

$manipula = new manipuladados();
$manipula->setTable("tb_parceiros");
$manipula->setFieldId("id");
$manipula->setValueId($id);

switch ($botao) {
    case "editar":
        $manipula->setFields("nome='$nome',endereco='$endereco',telefone='$telefone', url='$urlbanco'");
        $manipula->update();
        break;

    case "deletar":
        $manipula->delete();
        break;
}
echo '<script> alert("' . $manipula->getStatus() . '");</script>';
echo "<script> location = '../principal.php?secao=parceiros';</script>";
exit();
