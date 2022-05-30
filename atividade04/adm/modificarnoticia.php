<?php

$id = $_POST['txtId'];
$titulo = $_POST['txtTitulo'];
$descricoa = $_POST['txtDescricao'];
$url = $_POST['txtUrl'];
$botao = $_POST['botao'];

include_once("../classes/manipuladados.php");

$manipula = new manipuladados();

switch ($botao) {
    case "editar":
        echo ("Botão editar selecionado!");
        break;

    case "excluir":
        $manipula->setTable("tb_noticias");
        $manipula->setFieldId("id");
        $manipula->setValueId($id);
        $manipula->delete();
        break;

    default:
        echo '<script> alert("Algo de errado não está certo");</script>';

        echo "<script> location = 'principal.php';</script>";
        return;
}

echo '<script> alert("' . $manipula->getStatus() . '");</script>';

echo "<script> location = 'principal.php';</script>";
