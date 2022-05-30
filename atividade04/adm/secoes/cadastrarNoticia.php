<?php

include_once("../../classes/manipuladados.php");

function converte($Strings)
{
    return iconv("UTF-8", "ISO8859-1", $Strings);
}

$titulo = $_POST['txttitulo'];
$descricao = $_POST['txtdescricao'];
$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "imgnoticias/" . $nomearquivosalvo;
$urllocalsalvo = "../../imgnoticias/" . $nomearquivosalvo;

move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

echo '<script> alert("A sua noticia foi enviada");</script>';

echo "Título: " . $titulo . "<br/> Descricao: " . $descricao . "<br/>URL:" . $urlbanco;

$cadastra = new manipuladados();
$cadastra->setTable("tb_noticias");
$cadastra->setFields("titulo,descricao,url");
$cadastra->setDados("'$titulo','$descricao','$urlbanco'");
$cadastra->insert();

echo '<script> alert("' . $cadastra->getStatus() . '");</script>';
echo "<script> location = '../principal.php';</script>";

//echo "Título: " . $titulo . "<br/> Descricao: " . $descricao . "<br/>URL:" . $urlbanco;