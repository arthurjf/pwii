<?php

function listaFrota($conexao)
{
    $frota = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM frota");

    while ($veiculo = mysqli_fetch_assoc($resultado)) {
        array_push($frota, $veiculo);
    }
    return $frota;
}

function removeVeiculo($conexao, $id)
{
    $query = "DELETE FROM frota WHERE id = {$id}";

    return mysqli_query($conexao, $query);
}

function insereVeiculo($conexao, $placa, $modelo, $cor)
{
    $query = "INSERT INTO frota (placa, modelo, cor) VALUES ('{$placa}', '{$modelo}', '{$cor}')";

    $resultadoDaInsercao = mysqli_query($conexao, $query);

    return $resultadoDaInsercao;
}
