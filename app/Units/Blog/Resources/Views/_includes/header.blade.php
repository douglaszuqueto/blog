<nav class="col l12 nav-bar">
    <div class="nav-wrapper container">
        <div class="nav-left">
            <a href="{{route('blog.index')}}">
                <img src="{{asset('images/logo_2.png')}}" class="logo" alt="Logo Douglas Zuqueto">
            </a>
        </div>
        <h1 class="hide">Menu</h1>
        <p class="title_menu">Douglas Zuqueto</p>

        <a class="menu_toggle button-collapse" href="#" data-activates="mobile-demo"><span
                    class="material-icons black-text">reorder</span></a>

        <div class="nav-menu">
            <ul id="nav-mobile" class="hide-on-med-and-down">

                <li><a href="{{route('blog.index')}}" class="menu">Home</a></li>
                <li><a href="{{route('blog.articles.index')}}" class="menu">Artigos</a></li>
                <li><a href="{{route('blog.suggestions.index')}}" class="menu">Fábrica de Artigos</a></li>
                <li><a href="{{route('blog.contact.index')}}" class="menu">Contato</a></li>

                {{--<li class="hide"><a href="{{route('blog.project.index')}}" class="menu">O Projeto</a></li>--}}
                {{--<li class="hide"><a href="{{route('blog.news.index')}}" class="menu">Notícias</a></li>--}}
                {{--<li class="hide"><a href="{{route('blog.about-me.index')}}" class="menu">Sobre Mim</a></li>--}}


            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <a href="{{route('blog.index')}}">
                        <img src="{{asset('images/logo_2.png')}}" class="logo_mobile" alt="Logo Douglas Zuqueto">
                    </a>
                </li>
                <li><a href="{{route('blog.index')}}" class="menu">Home</a></li>
                <li><a href="{{route('blog.articles.index')}}" class="menu">Artigos</a></li>
                <li><a href="{{route('blog.suggestions.index')}}" class="menu">Artigos</a></li>
                <li><a href="{{route('blog.contact.index')}}" class="menu">Contato</a></li>

                {{--<li class="hide"><a href="{{route('blog.project.index')}}" class="menu">O Projeto</a></li>--}}
                {{--<li class="hide"><a href="{{route('blog.news.index')}}" class="menu">Notícias</a></li>--}}
                {{--<li class="hide"><a href="{{route('blog.about-me.index')}}" class="menu">Sobre Mim</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });

</script>
