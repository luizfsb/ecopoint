const incioScroll = document.querySelector('#inicio');
const sobreScroll = document.querySelector('#sobre');
const estacoesScroll = document.querySelector('#estacoes');
const incioScrollRodape = document.querySelector('#inicioRodape');
const sobreScrollRodape = document.querySelector('#sobreRodape');
const estacoesScrollRodape = document.querySelector('#estacoesRodape');

function scrollSuave(container){
    document.querySelector(container).scrollIntoView({ behavior: "smooth" });
}

// Scroll do cabecalho

incioScroll.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_inicio');
});

sobreScroll.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_sobre');
});

estacoesScroll.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_estacoes');
})

// Scroll do rodape

incioScrollRodape.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_inicio');
});

sobreScrollRodape.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_sobre');
});

estacoesScrollRodape.addEventListener('click', (evento) => {
    evento.preventDefault();
    scrollSuave('#container_estacoes');
})

