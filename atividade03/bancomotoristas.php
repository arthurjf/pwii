<?php

function listaMotoristas($conexao)
{
    $motoristas = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM motoristas INNER JOIN usuarios WHERE usuarios.id = motoristas.id_usuarios");

    while ($motorista = mysqli_fetch_assoc($resultado)) {
        array_push($motoristas, $motorista);
    }
    return $motoristas;
}

function removeMotorista($conexao, $id)
{
    $query = "DELETE FROM motoristas WHERE id = {$id}";

    return mysqli_query($conexao, $query);
}
