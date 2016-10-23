<style>
    nav {
        background-color: white;
        position: fixed;
        z-index: 999;
        /*opacity: 0.8;*/
    }

    .brand-logo {
        margin-left: 50px;
    }

    .active {
        background-color: #2196F3 !important;
    }
</style>
<nav>
    <div class="nav-wrapper">
        <a href="{{route('blog.index')}}" class="brand-logo blue-text text-darken-2 left">douglaszuqueto</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="active"><a href="{{route('blog.index')}}" class="">Home</a></li>
            <li><a href="{{route('blog.articles.index')}}" class="black-text">Artigos</a></li>
            <li><a class="black-text">O Projeto</a></li>
            <li><a class="black-text">Notícias</a></li>
            <li><a class="black-text">Sobre mim</a></li>
            <li><a class="black-text">Contato</a></li>
        </ul>
    </div>
</nav>
<div class="l12 hide-on-med-and-down center" style="height: 85px">
{{--    <img src="{{asset('images/esp8266.jpg')}}" alt="" class="responsive-img" style="height: 300px">--}}
</div>