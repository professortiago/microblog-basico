<?php
require "conecta.php";

function executarQuery($conexao, $sql){
    $consulta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return $consulta;
}


// Função para inserir novos usuários
function inserirUsuario($conexao, $nome, $email, $senha, $tipo){
    // Montando o comando SQL para fazer o INSERT dos dados
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha)
            VALUES('$nome', '$email', '$tipo', '$senha')";

    // Executando o comando no banco via PHP
    executarQuery($conexao, $sql);    
}


function listarUsuarios($conexao){
    $sql = "SELECT nome, email, tipo, id FROM usuarios";
    
    /* Executando o comando no banco via PHP 
    obtendo o resultado ("bruto") da consulta/comando. */
    $resultado = executarQuery($conexao, $sql);

    /* Extraindo do resultado "bruto" os dados da consulta
    em formato de ARRAY ASSOCIATIVO. */ 
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}


function listarUmUsuario($conexao, $id){
    // Comando SELECT para carregar dados de UMA PESSOA através do ID
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    // Execução e verificação do comando SQL
    $resultado = executarQuery($conexao, $sql);
    
    // Extração dos dados de UMA PESSOA como Array Associativo
    return mysqli_fetch_assoc($resultado);
}



function atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo){
    $sql = "UPDATE usuarios SET
                nome = '$nome',
                email = '$email',
                senha = '$senha',
                tipo = '$tipo'
            WHERE id = $id"; // NÃO ESQUEÇA NUNCA ESSA BAGAÇA! 

    // COPIE E COLE AQUI O MYSQLI_QUERY DA FUNÇÃO inserirUsuario
    executarQuery($conexao, $sql);
}

function excluirUsuario($conexao, $id){
    $sql = "DELETE FROM usuarios WHERE id = $id";
    executarQuery($conexao, $sql);
}


function buscarUsuario($conexao, $email){
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = executarQuery($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}


