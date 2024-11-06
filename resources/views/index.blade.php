<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Imagem no navegador -->

    <link rel="shortcut icon" type="imagex/png" href="img/icones/imgEnderecoNavegador.ico">

    <!-- Arquivos CSS -->

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <!-- Arquivos JS -->
     
    <script type="module" src="{{ asset('js/scroll.js') }}"></script>
    <script type="module" src="{{ asset('js/menu.js') }}"></script>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <title>Eco Point</title>
</head>

<body>

    <!-- Cabecalho -->

    <header>
        <nav class="cabecalho_container" id="container_inicio">
            <div class="cabecalho_logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/icones/logo.svg') }}" alt="imagem da logo" class="icone_logo-cabecalho">
                </a>
                <p class="nome_logo-cabecalho">Eco Point</p>
            </div>
            <div class="cabecalho_container-links">
                <ul class="cabecalho_links-lista" id="menu-links">
                    <li class="link-lista-item">
                        <a href="#" id="inicio" class="link_item inicio">Inicio</a>
                    </li>
                    <li class="link-lista-item">
                        <a href="#" id="instrucao" class="link_item comoFunciona">Como funciona?</a>
                    </li>
                    <li class="link-lista-item">
                        <a href="{{ route('estacoes') }}"  class="link_item estacao">Estações</a>
                    </li>
                    @auth
                    <li class="link-lista-item">
                        <a href="{{ route('profile.edit') }}" class="link_item perfil">Perfil</a>
                    </li>
                    <li class="link-lista-item">
                        <form action="{{ route('logout') }}" method="POST" class="link_sair">
                            @csrf
                            <a href="{{ route('logout') }}" class="link_item sair" onclick="event.preventDefault(); this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                    </li>

                    @endauth
                    @guest
                    <li class="link-lista-item">
                        <a href="{{ route('login') }}" class="link_item login" >Login</a>
                    </li>
                    <li class="link-lista-item">
                        <a href="{{ route('register')}}" class="link_item cadastrar">Cadastre-se</a>
                    </li>
                    @endguest
                </ul>
            </div>
            <img src="{{ asset('img/icones/icone-menu.svg') }}" alt="icone do menu hamburguer" class="menu-hamburguer" id="menu-btn">
        </nav>
    </header>

    <!-- Conteudo da apresentacao -->

    <main class="container">
        <section class="apresentacao imagem_aprensentacao">
            <div class="apresentacao_texto">
                <h1 class="apresentacao_titulo">Eco point</h1>
                <p class="apresentacao_paragrafo">
                    Locações de bicicletas e patinetes elétricos<br>
                    em toda Belo Horizonte</p>
                <a class="apresentacao_btn" href="{{ route('register') }}">Cadastra-se</a>
            </div>
            <img src="{{ asset('img/bicicleta-azul.png')}}" alt="imagem da bicicleta" class="apresentacao_imagem">
        </section>

        <!-- Sessao sobre nossa empresa -->

        <section class="sobre">
            <img src="{{ asset('img/patinete.png')}}" alt="" class="sobre_imagem">
            <div class="sobre_texto">
                <h2 class="sobre_titulo">Quem somos nos?</h2>
                <p class="sobre_paragrafo">O Eco Point e uma empresa focada no meio ambiente. Nossa missão é propor uma forma de deslocamento sustentável e rápida, com preços acessíveis para todos, fornecendo bicicletas e patinetes elétricos.</p>
            </div>
        </section>

        <!-- Sessao das intrucoes de como utilizar nossa plataforma -->

        <section class="instrucoes"  id="container_instrucao">
            <h3 class="instrucoes_titulo">Como funciona?</h3>
            <div class="instrucoes_cards">
                <div class="cards_item">
                    <img src="{{ asset('img/icones/icone-contrato.svg') }}" alt="icone do plano" class="intrucoes_icone">
                    <p class="intrucoes_subtitulo">Planos</p>
                    <p class="instrucoes_paragrafo">Se cadastrando em nosso site, ficará disponível nossos planos de assinatura mensais, sendo X1, X2 e X3, onde poderá avaliar os transportes e preços de maior interesse, podendo realizar o pagamento por Pix, cartão de crédito ou débito.</p>
                </div>
                <div class="cards_item">
                    <img src="{{ asset('img/icones/icone-bicicleta.svg') }}" alt="icone da bicicleta" class="intrucoes_icone">
                    <p class="intrucoes_subtitulo">Locação</p>
                    <p class="instrucoes_paragrafo">Ao realizar o cadastro e assinatura, vá à estação dá eco point mais próxima de você, para realizar a retirada de sua bicicleta ou patinete. Para realizar a devolução, basta ir a qualquer estação dá eco point.</p>
                </div>
            </div>

        </section>

        <!-- Patrocinios da plataforma -->

        <section class="patrocionios">
            <h4 class="patrocinios_titulo">Patrocinadores</h4>
            <div class="pratrocionios_lista">
                <div class="item-container">
                    <li class="item_lista">
                        <img src="{{ asset('img/icones/patrocineos/hipermercado.svg') }}" alt="imagem da logo de hipermercado" class="item_logo">
                        <p class="item_nome">Hipermercados LA</p>
                    </li>
                    <li class="item_lista">
                        <img src="{{ asset('img/icones/patrocineos/airline.svg') }}" alt="imagem da logo do airline" class="item_logo">
                        <p class="item_nome">SkyWings Airline</p>
                    </li>
                </div>
                <div class="item-container">
                    <div class="item_lista">
                        <img src="{{ asset('img/icones/patrocineos/bank.svg') }}" alt="imagem da logo do banco" class="item_logo">
                        <p class="item_nome">VIV Bank</p>
                    </div>
                    <div class="item_lista">
                        <img src="{{ asset('img/icones/patrocineos/tech.svg') }}" alt="imagem da logo do computador" class="item_logo">
                        <p class="item_nome">DataEdge</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodape -->

    <hr>
    <footer class="rodape">
        <div class="rodape_container-logo">
            <div class="rodape_logo-rodape">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/icones/logo.svg') }}" alt="imagem da logo" class="icone_logo-rodape">
                </a>
                <p class="nome_logo-rodape">Eco Point</p>
            </div>
            <div class="rodape_redes">
                <img src="{{ asset('img/icones/icone-linkedin.svg') }}" alt="Icone do linkedin" class="rodape_img-redes">
                <img src="{{ asset('img/icones/icone-instagram.svg') }}" alt="icone do instagram" class="rodape_img-redes">
                <img src="{{ asset('img/icones/icone-facebook.svg') }}" alt="icone do facebook" class="rodape_img-redes">
            </div>
        </div>
        <div class="rodape_empresa">
            <p class="rodape_titulo-coluna">Eco Point LTDA</p>
            <p class="rodape_cnpj">CNPJ: 00.000.000/0000-00</p>
            <p class="rodape_endereco">Belo horizonte MG - Brasil</p>
            <p class="rodape_endereco">Rua eco point, 80 - Meio Ambiente</p>
        </div>
        <div class="rodape_navegacao">
            <p class="rodape_titulo-coluna">Navegação</p>
            <a href="#" id="inicioRodape" class="rodape_link">Inicio</a>
            <a href="#" id="instrucaoRodape" class="rodape_link">Como funciona?</a>
            <a href="{{ route('estacoes') }}" class="rodape_link">Estações</a>
        </div>
        <div class="rodape_contatos">
            <p class="rodape_titulo-coluna">Contatos</p>
            <div class="rodape_numero">
                <img src="{{ asset('img/icones/icone-telefone.svg') }}" alt="imagem do icone do telefone" class="rodape_icone-contatos">
                <p class="numero">0800 000 0000</p>
            </div>
            <div class="rodape_email">
                <img src="{{ asset('img/icones/icone-email.svg') }}" alt="imagem do icone do e-mail" class="rodape_icone-contatos">
                <p>ecopoint@ecopoint.com.br</p>
            </div>
        </div>
    </footer>
</body>

</html>