<?php

function listaAlunos($conexao)
{
    $alunos = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM usuarios INNER JOIN alunos WHERE usuarios.id = alunos.id_usuarios");

    while ($aluno = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $aluno);
    }
    return $alunos;
}

function removeAluno($conexao, $id)
{
    $query = "DELETE FROM alunos WHERE id = {$id}";

    return mysqli_query($conexao, $query);
}
