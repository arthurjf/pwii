<?php

function listaServidores($conexao)
{
    $servidores = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM servidores INNER JOIN usuarios WHERE usuarios.id = servidores.id_usuarios");

    while ($servidor = mysqli_fetch_assoc($resultado)) {
        array_push($servidores, $servidor);
    }
    return $servidores;
}

function removeServidor($conexao, $id)
{
    $query = "DELETE FROM servidor WHERE id = {$id}";

    return mysqli_query($conexao, $query);
}
