const incioScroll = document.querySelector('#inicio');
const instrucaoScroll = document.querySelector('#instrucao');
const incioScrollRodape = document.querySelector('#inicioRodape');
const instrucaoScrollRodape = document.querySelector('#instrucaoRodape');


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


