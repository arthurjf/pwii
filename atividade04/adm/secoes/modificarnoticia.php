<?php

$id = $_POST['txtId'];
$titulo = $_POST['txtTitulo'];
$descricao = $_POST['txtDescricao'];
$url = $_POST['txtUrl'];
$botao = $_POST['botao'];

include_once("../../classes/manipuladados.php");

switch ($botao) {
    case "editar":
        session_start();
        $_SESSION = $_POST;
        header("location: ../principal.php?secao=formularioAlterarNoticia");
        break;

    case "excluir":
        $manipula = new manipuladados();
        $manipula->setTable("tb_noticias");
        $manipula->setFieldId("id");
        $manipula->setValueId($id);
        $manipula->delete();

        echo '<script> alert("' . $manipula->getStatus() . '");</script>';

        echo "<script> location = '../principal.php';</script>";
        break;

    default:
        echo '<script> alert("Algo de errado não está certo");</script>';

        echo "<script> location = '../principal.php';</script>";
        break;
}
