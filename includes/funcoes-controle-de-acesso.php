<?php // funcoes-controle-de-acesso.php

/* Sessões (SESSIONs) no PHP
Funcionalidade usada para o controle de acesso à determinadas
páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de cliente/aluno etc.

Nestas áreas o acesso se dá através de alguma forma de autenticação. Exemplos: login/senha, biometria, facial, 2-fatores etc */



/* Verificando se NÃO EXISTE uma sessão em andamento */
if( !isset($_SESSION) ){
    // Se não tiver, então iniciamos uma sessão
    session_start();
}

/* Proteger o acesso às páginas da área administrativa */
function verificarAcesso(){

    /* Se NÃO EXISTIR uma variável de sessão chamada "id",
    então significa que o usuário não está logado. */
    if( !isset($_SESSION['id']) ){
        /* Portanto, destruímos qualquer resquício de sessão */
        session_destroy();

        /* Fazemos o usuário ir para a página de login.php */
        header("location:../login.php?acesso_negado");
        
        /* E paramos completamente a execução do script */
        die();
    }
}


/* Função que será usada pelo formulário login.php */
function login($id, $nome, $tipo){
    // Criando variáveis de sessão
    $_SESSION['id'] = $id;          
    $_SESSION['nome'] = $nome;      
    $_SESSION['tipo'] = $tipo;      
}

/* Função que será usada quando clicar no link Sair */
function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    die();
}

/* Verificar o nível/privilégio de acesso do usuário */
function verificarNivel(){
    /* Se o tipo de usuário logado for DIFERENTE de admin */
    if( $_SESSION['tipo'] !== 'admin' ){
        /* Então, redirecione para a página nao-autorizado.php */
        header("location:nao-autorizado.php");
        die();
    }
}