<?php
require "includes/cabecalho.php"; 
require "includes/funcoes-noticias.php"; 

// Capturando o id da notícia via URL
$idNoticia = $_GET['id'];

// Carregando os dados da notícia usando o ID
$dadosDaNoticia = lerNoticiaCompleta($conexao, $idNoticia);
?>

<div class="row my-1 mx-md-n1">

    <article class="col-12">
        <h2> <?=$dadosDaNoticia['titulo']?> </h2>
        <p class="font-weight-light">
            <time><?=formataData($dadosDaNoticia['data'])?></time> 
            - <span><?=$dadosDaNoticia['nome']?></span>
        </p>
        <img src="imagens/<?=$dadosDaNoticia['imagem']?>" alt="" class="float-start pe-2 img-fluid">
        <p class="ajusta-texto"><?=$dadosDaNoticia['texto']?></p>
    </article>
    

</div>        

<?php 
require "includes/rodape.php";
?>

