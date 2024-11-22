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
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/planos.css') }}">

    <!-- Arquivos JS -->
     
    <script type="module" src="{{ asset('js/scroll.js') }}"></script>
    <script type="module" src="{{ asset('js/menu.js') }}"></script>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Eco Point - Planos</title>
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
                        <a href="{{ route('index') }}" class="link_item">Inicio</a>
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


    <main class="container">
        <section class="planos">
            <!-- Plano Bronze -->
            <div class="plano bronze">
                <h2>Bronze</h2>
                <p class="valor">R$ 10,00</p>
                <p class="paragrafo" >Ideal para quem busca uma opção acessível e prática para o dia a dia.</p>
                <ul>
                    <li>Acesso a bicicletas tradicionais</li>
                    <li>Disponibilidade em todas as estações Eco Point</li>
                    <li>Suporte básico em caso de problemas técnicos</li>
                    <li>Até 2 horas de uso por dia</li>
                </ul>
                <a href="{{ route('bronze') }}" class="assine_btn">Quero Esse</a>
            </div>

            <!-- Plano Prata -->
            <div class="plano prata">
                <h2>Prata</h2>
                <p class="valor">R$ 30,00</p>
                <p class="paragrafo">Para quem deseja um upgrade com mais conforto e opções de mobilidade.</p>
                <ul>
                    <li>Bicicletas premium e patins incluídos</li>
                    <li>Acesso a estações especiais com suporte técnico avançado</li>
                    <li>Até 4 horas de uso por dia</li>
                    <li>Descontos em parceiros locais</li>
                </ul>
                <a href="{{ route('prata') }}" class="assine_btn">Quero Esse</a>
                
            </div>

            <!-- Plano Ouro -->
            <div class="plano ouro">
                <h2>Ouro</h2>
                <p class="valor">R$ 60,00</p>
                <p class="paragrafo">A escolha perfeita para quem quer mobilidade total e opções exclusivas.</p>
                <ul>
                    <li>Acesso a bicicletas elétricas, patinetes e monociclos</li>
                    <li>Uso ilimitado em todas as estações Eco Point</li>
                    <li>Suporte completo e substituição de veículos em minutos</li>
                    <li>Acesso VIP a eventos exclusivos</li>
                </ul>
                <a href="{{ route('ouro') }}" class="assine_btn">Quero Esse</a>
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
