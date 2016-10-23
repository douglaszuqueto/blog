<style>
    main, footer {
        padding-left: 240px;
        padding-top: 65px;
    }

    header {
        position: absolute;
        width: 100%;
        z-index: 9999;
    }

    .side-nav {
        height: 100% !important;
    }

    #nav-mobile {
        margin-top: 65px;
    }

    #nav-title {
        margin: -5px 0 0 10px;
    }

    @media only screen and (max-width: 992px) {
        main, footer {
            padding-left: 0;
        }

        .container {
            width: 95%;
        }

        #nav-title {
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
                            <a>
                                <i class="material-icons">add_alert</i>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="material-icons">settings</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('auth.logout')}}">
                                <i class="material-icons">power_settings_new</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<ul id="nav-mobile" class="side-nav fixed">
    <li class="bold">
        <a href="{{route('admin.dashboard.index')}}" class="waves-effect waves-blue">
            <i class="material-icons blue-text text-darken-2">dashboard</i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">equalizer</i>
                    <span>Estatísticas</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.statistics.index')}}">Google Analytics</a></li>
                        <li><a href="{{route('admin.statistics.github')}}">Github</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">comment</i>
                    <span>Artigos</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('admin.articles.index')}}">Artigos</a></li>
                        <li><a href="{{route('admin.articles.create')}}">Cadastrar Artigo</a></li>
                        <li><a href="{{route('admin.articles.shedule')}}">Agendar Artigo</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a href="{{route('admin.news.index')}}" class="waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">subject</i>
                    <span>Notícias</span>
                </a>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a href="{{route('admin.sponsors.index')}}" class="waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">business</i>
                    <span>Patrocinadores</span>
                </a>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a href="{{route('admin.supporters.index')}}" class="waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">business</i>
                    <span>Apoiadores</span>
                </a>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a href="{{route('admin.contact.index')}}" class="waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">email</i>
                    <span>Mensagens</span>
                </a>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a href="{{route('admin.users.index')}}" class="waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">person_pin</i>
                    <span>Usuários</span>
                </a>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header  waves-effect waves-blue">
                    <i class="material-icons blue-text text-darken-2">settings</i>
                    <span>Configurações</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="">Configurações</a></li>
                        <li><a href="{{route('admin.categories.index')}}">Categorias</a></li>
                        <li><a href="{{route('admin.tags.index')}}">Tags</a></li>
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
