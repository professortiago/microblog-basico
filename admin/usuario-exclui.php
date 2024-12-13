<?php
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();
verificarNivel();

require "../includes/funcoes-usuarios.php";

// Pegando o id passado via URL
$id = $_GET['id'];

// Chamando a função de excluir passando o id do usuário
excluirUsuario($conexao, $id);

// Redirecionando para a página com todos os usuarios
header("location:usuarios.php");