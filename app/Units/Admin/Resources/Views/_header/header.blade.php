<style>
    main, footer {
        padding-left: 240px;
        padding-top: 65px;
    }
    header{position: absolute; width: 100%; z-index: 9999;}

    #nav-mobile{
        margin-top: 65px;
    }

    #nav-title{
        margin: -5px 0 0 10px;
    }
    @media only screen and (max-width: 992px) {
        main, footer {
            padding-left: 0;
        }

        .container {
            width: 85%;
        }
        #nav-title{
            display: none;
        }
    }

    @media only screen and (min-width: 993px) {
        .container {
            padding-left: 10px;
            width: 95%;
        }

    }

    header nav {
        background-color: #008BD3 !important;
    }

    .waves-effect.waves-blue .waves-ripple {
        background-color: #008BD3;
    }</style>
<header>
    <div class="navbar-fixed">

        <nav>
            <div class="">
                <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
                    <i class="material-icons">menu</i>
                </a>
                <div class="nav-wrapper">
                    <ul id="nav-title" class="left">
                        <h4 class="">@douglaszuqueto</h4>
                    </ul>
                    <ul class="right">
                        <li>
                            <a href="{{route('auth.logout')}}">Sair<i class="material-icons right">input</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<ul id="nav-mobile" class="side-nav fixed">
    <li class="bold">
        <a href="{{route('admin.dashboard.index')}}" class="waves-effect waves-blue">Dashboard</a>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="waves-effect waves-blue">
                    <i class="material-icons"></i>
                    <span>Estatísticas</span>
                </a>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Artigos</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.articles.index')}}">Artigos</a></li>
                        <li><a href="">Cadastrar Artigo</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Usuários</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
                        <li><a href="{{route('admin.users.create')}}">Cadastrar Usuário</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Notícias</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.news.index')}}">Notícias</a></li>
                        <li><a href="{{route('admin.news.create')}}">Cadastrar Notícia</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Mensagens</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.contact.index')}}">Mensagens</a></li>
                        <li><a href="">Cadastrar Mensagens</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Patrocinadores</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.sponsors.index')}}">Patrocinadores</a></li>
                        <li><a href="{{route('admin.sponsors.create')}}">Cadastrar Patrocinador</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Apoiadores</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.supporters.index')}}">Apoiadores</a></li>
                        <li><a href="{{route('admin.supporters.create')}}">Cadastrar Apoiador</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">Configurações</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="">Configurações</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>
<script>
    $(document).ready(function ($) {
        $('.button-collapse').sideNav({'edge': 'left'});
        $('.collapsible').collapsible({
            accordion: false
        });
    });
</script>
