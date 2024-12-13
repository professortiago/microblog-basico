<?php 
require "../includes/cabecalho-admin.php";
?>


<article class="p-5 my-4 rounded-3 bg-white shadow">
    <div class="container-fluid py-1">        
        <h2 class="display-4 bg-warning rounded text-center">Não autorizado!</h2>
        <hr class="my-4">
        <p class="fs-5 text-center">Desculpe <b>usuário</b>, mas você <span class="badge bg-danger">não tem permissão </span> para acessar este recurso.</p>
        <hr class="my-4">

        <p>
            <a href="index.php" class="btn btn-primary">Voltar para a página inicial</a>
        </p>
        
    </div>
</article>


<?php 
require "../includes/rodape-admin.php";
?>

