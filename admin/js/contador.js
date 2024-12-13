/* SCRIPT PARA CONTAGEM DE CARACTERES DO CAMPO TEXTAREA RESUMO
-Usado nas páginas noticia-insere.php e noticia-atualiza.php */

// Limite de caracteres (igual ao definido no maxlength do <textarea>)
const MAX_CARACTERES = 300;

// Elementos a serem manipulados
const spanMaximo = document.querySelector("#maximo"); // mostrará a contagem
const textResumo = document.querySelector("#resumo"); // campo <textarea> do resumo

// Iniciando sem a classe bg-danger e com a classe bg-success
spanMaximo.classList.remove("bg-danger");
spanMaximo.classList.add("bg-success");

// Capturando a quantidade de dígitos do resumo
let quantidadeDigitada = textResumo.value.length;

// Chamando a função de atualização do contador de dígitos
atualizarContador(quantidadeDigitada);

function atualizarContador (quantidade) {
  // Atualizando o <span> que mostra a contagem 
  spanMaximo.textContent = quantidade;

  // Se a quantidade for zero OU 300 (que é o máximo indicado)
  if (quantidade === 0 || quantidade === MAX_CARACTERES) {
    // Remove a classe verde e coloque a vermelha
    spanMaximo.classList.remove("bg-success");
    spanMaximo.classList.add("bg-danger");
  } else {
    // Senão, remove a vermelha e coloque a verde
    spanMaximo.classList.remove("bg-danger");
    spanMaximo.classList.add("bg-success");
  }
};

// Evento para monitorar a digitação no campo <textarea> do resumo
textResumo.addEventListener("input", function() {
  // Conforme algo for digitado, atualizamos a variável quantidadeDigitada
  quantidadeDigitada = textResumo.value.length;

  // E chamamos a função que irá manipular o <span>
  atualizarContador(quantidadeDigitada);
});