<?php 
require "../includes/cabecalho-admin.php";
require "../includes/funcoes-usuarios.php";

verificarNivel();

// Capturando o id passado via URL
$id = $_GET['id'];

// Chamamos a função para carregar os dados da pessoa através do id
$dadosUsuario = listarUmUsuario($conexao, $id);

// Verificando se o botão do formulário foi acionado
if( isset($_POST['atualizar']) ){
	// Pegando os dados dos campos
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo'];

	/* Se a senha estiver vazia OU for a mesma */
	if( empty($_POST['senha']) || password_verify($_POST['senha'], $dadosUsuario['senha']) ){
		// Manter a mesma senha (copiamos a senha do banco para uma variável)
		$senha = $dadosUsuario['senha'];
	} else {
		// Codificar a nova senha digitada no formulário
		$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	}

	// Chamamos a função para o UPDATE no banco
	atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo);

	// Redirecionamos para a página com a lista de usuarios
	header("location:usuarios.php");
}
?>

<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Atualizar dados do usuário
		</h2>
				
		<form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input value="<?=$dadosUsuario['nome']?>" class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input value="<?=$dadosUsuario['email']?>" class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>

			<div class="mb-3">
				<label class="form-label" for="tipo">Tipo:</label>
				<select class="form-select" name="tipo" id="tipo" required>
					<option value=""></option>


					<option 
					<?php if($dadosUsuario['tipo'] === 'editor') echo 'selected' ?>
					value="editor">Editor</option>
					

					<option 
					<?php if($dadosUsuario['tipo'] === 'admin') echo 'selected' ?>
					value="admin">Administrador</option>


				</select>
			</div>
			
			<button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
		</form>
		
	</article>
</div>


<?php 
require "../includes/rodape-admin.php";
?>

