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
