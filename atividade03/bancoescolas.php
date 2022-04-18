<?php

function listaEscolas($conexao)
{
    $escolas = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM escolas");

    while ($escola = mysqli_fetch_assoc($resultado)) {
        array_push($escolas, $escola);
    }
    return $escolas;
}

function removeEscola($conexao, $id)
{
    $query = "DELETE FROM escolas WHERE id = {$id}";

    return mysqli_query($conexao, $query);
}

function insereEscola($conexao, $nome, $endereco)
{
    $query = "INSERT INTO escolas (nome, endereco) VALUES ('{$nome}', ('{$endereco}'))";

    $resultadoDaInsercao = mysqli_query($conexao, $query);

    return $resultadoDaInsercao;
}
