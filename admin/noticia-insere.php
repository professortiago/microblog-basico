<?php 
require "../includes/cabecalho-admin.php";
require "../includes/funcoes-noticias.php";

if(isset($_POST['inserir'])){
	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	$resumo = $_POST['resumo'];

	// Capturando o id do usuário que está logado na sessão
	$usuarioId = $_SESSION['id'];

	// Capturando os dados da imagem que será enviada
	$imagem = $_FILES['imagem']; // Isso acessa o campo imagem do form.

	// Fazendo o upload da imagem para o servidor
	upload($imagem);

	// Enviar os dados para o banco de dados
	inserirNoticia(
		$conexao, $titulo, $texto, $resumo, $imagem['name'], $usuarioId);

	// Redirecionando para a página de noticias.php
	header("location:noticias.php");
}
?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir nova notícia
		</h2>
				
		<form enctype="multipart/form-data" autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">            

			<div class="mb-3">
                <label class="form-label" for="titulo">Título:</label>
                <input class="form-control" required type="text" id="titulo" name="titulo" >
			</div>

			<div class="mb-3">
                <label class="form-label" for="texto">Texto:</label>
                <textarea class="form-control" required name="texto" id="texto" cols="50" rows="6"></textarea>
			</div>

			<div class="mb-3">
                <label class="form-label" for="resumo">Resumo (máximo de 300 caracteres):</label>
                <span id="maximo" class="badge bg-danger">0</span>
                <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="2" maxlength="300"></textarea> 
			</div>

			<div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input required class="form-control" type="file" id="imagem" name="imagem"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>


<?php 
require "../includes/rodape-admin.php";
?>

