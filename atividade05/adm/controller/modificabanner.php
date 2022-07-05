<?php
include_once("../../classes/manipuladados.php");

$botao = $_POST['botao'];

$manipula = new manipuladados();
$manipula->setTable("tb_banners");

switch ($botao) {
    case "update":
        $id = $_POST['txtId'];
        $nomearquivosalvo = converte($_FILES['arquivo']['name']);
        $urlbanco = "imgbanners/" . $nomearquivosalvo;
        $urllocalsalvo = "../../imgbanners/" . $nomearquivosalvo;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
        $manipula->setFields("url='$urlbanco'");
        $manipula->setFieldId("id");
        $manipula->setValueId($id);
        $manipula->update();
        break;

    case "delete":
        $id = $_POST['txtId'];
        $manipula->setFieldId("id");
        $manipula->setValueId($id);
        $manipula->delete();
        break;

    case "insert":
        $nomearquivosalvo = converte($_FILES['arquivo']['name']);
        $urlbanco = "imgbanners/" . $nomearquivosalvo;
        $urllocalsalvo = "../../imgbanners/" . $nomearquivosalvo;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
        $manipula->setFields("url");
        $manipula->setDados("'$urlbanco'");
        $manipula->insert();
        break;
}
echo '<script> alert("' . $manipula->getStatus() . '");</script>';
echo "<script> location = '../principal.php?secao=banners';</script>";
exit();
