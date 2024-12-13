<?php
require "../includes/cabecalho-admin.php";
require "../includes/funcoes-noticias.php";

// Capturando o parâmetro id enviado via URL/LINK dinâmico
$idNoticia = $_GET['id'];

// Capturando o id do usuário que está logado
$idUsuario = $_SESSION['id'];

// Capturando o tipo do usuário que está logado
$tipoUsuario = $_SESSION['tipo'];

// Chamando a função e carregando o array com os dados da notícia
$dadosDaNoticia = lerUmaNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);


if(isset($_POST['atualizar'])){
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $resumo = $_POST['resumo'];

    /* Lógica para a imagem */

    /* Se o campo "imagem" estiver vazio, então significa que o usuário NÃO QUER MUDAR DE IMAGEM. Portanto, a imagem que já existe continuará (será mantida). */
    if(empty($_FILES['imagem']['name'])){
        // Pegamos a imagem/referência que já tem e colocamos na variável
        $imagem = $_POST['imagem-existente'];
    } else {
        // Senão, pegamos a imagem/referência NOVA e colocamos na variável
        $imagem = $_FILES['imagem']['name'];
        
        // E em seguida, enviamos o arquivo pro servidor
        upload($_FILES['imagem']);
    }

    // Chamamos a função para atualizar (update)
    atualizarNoticia(
        $conexao, $titulo, $texto, $resumo, $imagem, $idNoticia,
        $idUsuario, $tipoUsuario
    );

    // Voltamos pra página de noticias.php
    header("location:noticias.php");
}
?>


<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">

        <h2 class="text-center">
            Atualizar dados da notícia
        </h2>

        <form enctype="multipart/form-data" autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

            <div class="mb-3">
                <label class="form-label" for="titulo">Título:</label>
                <input value="<?=$dadosDaNoticia['titulo']?>" class="form-control" required type="text" id="titulo" name="titulo">
            </div>

            <div class="mb-3">
                <label class="form-label" for="texto">Texto:</label>
                <textarea class="form-control" required name="texto" id="texto" cols="50" rows="6"><?=$dadosDaNoticia['texto']?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="resumo">Resumo (máximo de 300 caracteres):</label>
                <span id="maximo" class="badge bg-danger">0</span>
                <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="2" maxlength="300"><?=$dadosDaNoticia['resumo']?></textarea>
            </div>

            <div class="mb-3">
                <label for="imagem-existente" class="form-label">Imagem da notícia:</label>
                <!-- campo somente leitura, meramente informativo -->
                <input value="<?=$dadosDaNoticia['imagem']?>" class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
                <input class="form-control" type="file" id="imagem" name="imagem" accept="image/png, image/jpeg, image/gif, image/svg+xml">
            </div>

            <button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
        </form>

    </article>
</div>


<?php
require "../includes/rodape-admin.php";
?>