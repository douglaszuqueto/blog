<style>
    body {
        background: #F9F9F9 !important;
    }
    nav {
        background: rgba(0, 0, 0, 0.9);
        position: fixed;
        z-index: 999;
    }

    .brand-logo {
        margin-left: 50px;
    }

    nav ul a {
        font-size: 14pt;
        font-family: 'Open Sans';
        color: #fff;
        padding: 0 20px;
    }
    nav ul a:hover {
        padding: 0 20px;
        font-size: 15pt;
        color: #008BD3;
    }

    /*.active {*/
    /*background-color: #2196F3 !important;*/
    /*color: white !important;*/
    /*}*/
</style>
<nav>
    <div class="nav-wrapper">
        <a href="{{route('blog.index')}}" class="brand-logo left">douglaszuqueto</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('blog.index')}}" class="menu">HOME</a></li>
            <li><a href="{{route('blog.articles.index')}}" class="menu">ARTIGOS</a></li>
            <li><a href="{{route('blog.project.index')}}" class="menu">O PROJETO</a></li>
            <li><a href="{{route('blog.news.index')}}" class="menu">NOTÍCIAS</a></li>
            <li><a href="{{route('blog.about-me.index')}}" class="menu">SOBRE MIM</a></li>
            <li><a href="{{route('blog.contact.index')}}" class="menu">CONTATO</a></li>
        </ul>
    </div>
</nav>
<div class="l12 hide-on-med-and-down center" style="height: 85px">
    {{--    <img src="{{asset('images/esp8266.jpg')}}" alt="" class="responsive-img" style="height: 300px">--}}
</div>