<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="active"><a href="{{route('admin.dashboard.index')}}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li><a href="#">Estatísticas</a></li>
        <li><a href="{{route('admin.articles.index')}}">Artigos</a></li>
        <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
        <li><a href="{{route('admin.news.index')}}">Notícias</a></li>
        <li><a href="{{route('admin.contact.index')}}">Mensagens</a></li>
        <li><a href="{{route('admin.sponsors.index')}}">Patrocinadores</a></li>
        <li><a href="#">Configurações</a></li>
    </ul>
</div>

<style>
    .sidebar {
        display: none;
    }

    /* Sidebar navigation */
    .nav-sidebar {
        margin-right: -21px; /* 20px padding + 1px border */
        margin-bottom: 20px;
        margin-left: -20px;
    }

    .nav-sidebar > li > a {
        padding-right: 20px;
        padding-left: 20px;
    }

    .nav-sidebar > .active > a,
    .nav-sidebar > .active > a:hover,
    .nav-sidebar > .active > a:focus {
        color: #fff;
        background-color: #428bca;
    }

    @media (min-width: 768px) {
        .sidebar {
            position: fixed;
            top: 51px;
            bottom: 0;
            left: 0;
            z-index: 1000;
            display: block;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
            background-color: #f5f5f5;
            border-right: 1px solid #eee;
        }
    }

</style>