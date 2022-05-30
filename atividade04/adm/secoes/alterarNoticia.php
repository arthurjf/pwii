<?php

include_once("../../classes/manipuladados.php");

function converte($Strings)
{
    return iconv("UTF-8", "ISO8859-1", $Strings);
}

$id = $_POST['txtId'];
$titulo = $_POST['txtTitulo'];
$descricao = $_POST['txtDescricao'];

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "imgnoticias/" . $nomearquivosalvo;
$urllocalsalvo = "../../imgnoticias/" . $nomearquivosalvo;

move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

echo '<script> alert("A sua noticia foi enviada");</script>';

echo "Título: " . $titulo . "<br/> Descricao: " . $descricao . "<br/>URL:" . $urlbanco;

$cadastra = new manipuladados();
$cadastra->setTable("tb_noticias");
$cadastra->setFields("titulo='$titulo',descricao='$descricao',url='$urlbanco'");
$cadastra->setFieldId("id");
$cadastra->setValueId($id);
$cadastra->update();

echo '<script> alert("' . $cadastra->getStatus() . '");</script>';

echo "<script> location = '../principal.php';</script>";

?>