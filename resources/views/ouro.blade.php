<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eco Point - Plano Ouro</title>

    <!-- Imagem no navegador -->

    <link rel="shortcut icon" type="imagex/png" href="img/icones/imgEnderecoNavegador.ico">

    <!-- Arquivos CSS -->

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/planos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagamento.css') }}">

    <!-- Arquivos JS -->
     
    <script type="module" src="{{ asset('js/scroll.js') }}"></script>
    <script type="module" src="{{ asset('js/menu.js') }}"></script>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <header>
        <nav class="cabecalho_container">
            <div class="cabecalho_logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/icones/logo.svg') }}" alt="imagem da logo" class="icone_logo-cabecalho">
                </a>
                <p class="nome_logo-cabecalho">Eco Point</p>
            </div>
        </nav>
    </header>

    <main class="container">
        <section class="plano-pagamento">
            <div class="plano-detalhe ouro">
                <h2>Plano Ouro</h2>
                <p>Ideal para quem busca a melhor experiência de uso com todos os benefícios.</p>
                <div class="descricao">
                    <h3>Detalhes do Plano:</h3>
                    <p>O Plano Ouro oferece acesso ilimitado a bicicletas tradicionais e elétricas, além de um suporte premium para garantir a melhor experiência em suas viagens. Perfeito para quem usa frequentemente as bicicletas da Eco Point.</p>
                </div>
                <ul>
                    <li>Acesso ilimitado a bicicletas tradicionais e elétricas</li>
                    <li>Disponibilidade em todas as estações Eco Point</li>
                    <li>Suporte premium 24/7</li>
                    <li>Uso ilimitado por dia</li>
                    <li>Cancelamento a qualquer momento sem taxas</li>
                </ul>
            </div>

            <div class="form-pagamento">
                <h3>Formulário de Pagamento</h3>
                <form action="#" method="POST" class="form-pagamento">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="cartao">Número do Cartão:</label>
                    <input type="text" id="cartao" name="cartao" required>

                    <label for="vencimento">Data de Vencimento:</label>
                    <input type="month" id="vencimento" name="vencimento" required>

                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" required>

                    <label for="cupom">Cupom de Desconto:</label>
                    <input type="text" id="cupom" name="cupom" class="input-cupom" placeholder="Digite seu cupom">
                    <button type="button" class="btn-cupom" onclick="animarCupom()">Aplicar Cupom</button>

                    <button type="submit" class="btn-submit">Finalizar Pagamento</button>
                </form>
            </div>
        </section>
    </main>

    <script>
        function animarCupom() {
            const cupomInput = document.getElementById('cupom');
            cupomInput.classList.add('animacao-cupom');
            setTimeout(() => {
                cupomInput.classList.remove('animacao-cupom');
            }, 1000); // Dura 1 segundo
        }
    </script>
</body>
</html>
