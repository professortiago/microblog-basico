<?php // noticia-exclui.php
require "../includes/funcoes-noticias.php";
require "../includes/funcoes-controle-de-acesso.php";

// Verificando se o usuário está logado
verificarAcesso();

// Capturando o id da noticia que será DELETADA
$idNoticia = $_GET['id'];

// Capturando o id do usuário logado na sessão
$idUsuario = $_SESSION['id'];

// Capturando o tipo de usuário logado na sessão
$tipoUsuario = $_SESSION['tipo'];

// Executando o DELETE da noticia no banco de dados
excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

// Redirecionando para a página com a lista de notícias
header("location:noticias.php");