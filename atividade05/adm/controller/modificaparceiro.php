<?php
include_once("../../classes/manipuladados.php");

$botao = $_POST['botao'];

$manipula = new manipuladados();
$manipula->setTable("tb_parceiros");

switch ($botao) {
    case "update":
    case "insert":
        $nome = $_POST['txtNome'];
        $endereco = $_POST['txtEndereco'];
        $telefone = $_POST['txtTelefone'];
        $nomearquivosalvo = converte($_FILES['arquivo']['name']);
        $urlbanco = "imgparceiros/" . $nomearquivosalvo;
        $urllocalsalvo = "../../imgparceiros/" . $nomearquivosalvo;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
        switch ($botao) {
            case "update":
                $id = $_POST['txtId'];
                $manipula->setFields("nome='$nome',endereco='$endereco',telefone='$telefone', url='$urlbanco'");
                $manipula->setFieldId("id");
                $manipula->setValueId($id);
                $manipula->update();
                break;
                
            case "insert":
                $manipula->setFields("nome, endereco, telefone, url");
                $manipula->setDados("'$nome','$endereco','$telefone','$urlbanco'");
                $manipula->insert();
                break;
        }
        break;

    case "delete":
        $id = $_POST['txtId'];
        $manipula->setFieldId("id");
        $manipula->setValueId($id);
        $manipula->delete();
        break;
}
echo '<script> alert("' . $manipula->getStatus() . '");</script>';
echo "<script> location = '../principal.php?secao=parceiros';</script>";
exit();
