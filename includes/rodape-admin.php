</div>
</main>

<footer class="footer mt-auto py-3 bg-dark border-top">
    <div class="container text-center text-white">
        Microblog é um site fictício desenvolvido para fins didáticos | Tiago Bezerra dos Santos
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php 
// Avaliando qual página está aberta no momento (variável existente no cabecalho-admin.php)
switch($pagina){
    // Se for usuarios.php ou noticias.php, carregamos o confirm.js
    case 'usuarios.php':
    case 'noticias.php':
?>
<script src="js/confirm.js"></script>
<?php
    break;

    // Se for noticia-insere.php ou noticia-atualiza.php, carregamos o contador.js
    case 'noticia-insere.php':
    case 'noticia-atualiza.php':
?>
<script src="js/contador.js"></script>
<?php
    break;
}
?>
</body>
</html>