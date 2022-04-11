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

    $resultadoDaConsulta = mysqli_query($conexao, $query);

    return $resultadoDaConsulta;
}
