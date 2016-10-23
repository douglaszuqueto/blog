<style>
    nav {
        background-color: white;
    }

    .brand-logo {
        margin-left: 50px;
    }
</style>
<nav>
    <div class="nav-wrapper">
        <a href="{{route('blog.index')}}" class="brand-logo blue-text">douglaszuqueto</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="active"><a class="black-text">Home</a></li>
            <li><a class="black-text">Artigos</a></li>
            <li><a class="black-text">O Projeto</a></li>
            <li><a class="black-text">Notícias</a></li>
            <li><a class="black-text">Sobre mim</a></li>
            <li><a class="black-text">Contato</a></li>
        </ul>
    </div>
</nav>
<div class="l12">
    <img src="{{asset('images/esp8266.jpg')}}" alt="" class="responsive-img">
</div>