const incioScroll = document.getElementById('inicio');
const instrucaoScroll = document.getElementById('instrucao');
const incioScrollRodape = document.getElementById('inicioRodape');
const instrucaoScrollRodape = document.getElementById('instrucaoRodape');


//  Funcao para fazer o scoll suave da pagina

function scrollSuave(container){
    document.querySelector(container).scrollIntoView({ behavior: "smooth" });
}

// Scroll do cabecalho

incioScroll.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_inicio');
});

instrucaoScroll.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_instrucao');
});

// Scroll do rodape

incioScrollRodape.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_inicio');
});

instrucaoRodape.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_instrucao');
});


