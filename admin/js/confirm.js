// Selecionamos todos os links com a classe "excluir"
const links = document.querySelectorAll('.excluir');

// Aplicamos à cada um deles o ouvinte de evento para capturar a resposta do confirm()
for(let link of links){
    link.addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm("Deseja realmente excluir?");

        // Se a resposta for sim/ok (TRUE), fazemos o link para seu destino (href)
        if(resposta) location.href = link.getAttribute('href');
    });
}