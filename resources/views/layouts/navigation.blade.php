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
                        <a href="{{ route('index') }}" id="inicio" class="link_item">Inicio</a>
                    </li>
                    <li class="link-lista-item">
                        <a href="{{ route('profile.edit') }}" class="link_item">Perfil</a>
                    </li>
                    <li class="link-lista-item">
                        <form action="{{ route('logout') }}" method="POST" class="link_sair">
                            @csrf
                            <a href="{{ route('logout') }}" class="link_item" onclick="event.preventDefault(); this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('img/icones/icone-menu.svg') }}" alt="icone do menu hamburguer" class="menu-hamburguer" id="menu-btn">
        </nav>
</header>