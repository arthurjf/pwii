<?php

function insereUsuario($conexao, $nome, $telefone, $cpf, $nascimento, $email, $senha)
{
    $query = "INSERT INTO usuarios (nome, telefone, cpf, datanascimento, email, senha) 
    VALUES ('{$nome}', '{$telefone}', '{$cpf}', '{$nascimento}', '{$email}', '{$senha}')";

    $resultadoDaInsercao = mysqli_query($conexao, $query);

    return $resultadoDaInsercao;
}

function conectaUsuario($conexao, $email, $senha)
{
    $query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";

    $resultado = mysqli_query($conexao, $query);

    $usuario = mysqli_fetch_assoc($resultado);

    return $usuario;
}

function listaUsuarios($conexao)
{
    $usuarios = array();

    $resultado = mysqli_query($conexao, "SELECT * FROM usuarios");

    while ($usuario = mysqli_fetch_assoc($resultado)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}
