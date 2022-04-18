<?php

function listaRotas($conexao)
{
    $rotas = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM rotas");

    while ($rota = mysqli_fetch_assoc($resultado)) {
        array_push($rotas, $rota);
    }
    return $rotas;
}

function removeRota($conexao, $id)
{
    $query = "DELETE FROM rotas WHERE id = {$id}";

    return mysqli_query($conexao, $query);
}
