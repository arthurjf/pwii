<?php
include_once("../../classes/manipuladados.php");

$botao = $_POST['botao'];

$manipula = new manipuladados();
$manipula->setTable("tb_produtos");

switch ($botao) {
    case "update":
    case "insert":
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];
        $idCategoria = $_POST['txtCategoriaId'];
        $nomearquivosalvo = converte($_FILES['arquivo']['name']);
        $urlbanco = "imgprodutos/" . $nomearquivosalvo;
        $urllocalsalvo = "../../imgprodutos/" . $nomearquivosalvo;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
        switch ($botao) {
            case "update":
                $id = $_POST['txtId'];
                $manipula->setFields("nome='$nome',descricao='$descricao',preco='$preco', url='$urlbanco', id_categorias='$idCategoria'");
                $manipula->setFieldId("id");
                $manipula->setValueId($id);
                $manipula->update();
                break;

            case "insert":
                $manipula->setFields("nome, descricao, preco, url, id_categorias");
                $manipula->setDados("'$nome','$descricao','$preco','$urlbanco', '$idCategoria'");
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
echo "<script> location = '../principal.php?secao=produtos';</script>";
exit();
