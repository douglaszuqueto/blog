<div class="">
    <nav>
        <div class="nav-wrapper container">
            <div class="nav-left">
                <a href="{{route('blog.index')}}">
                    <img src="{{asset('images/logo_2.png')}}" alt="" width="10%" style="padding-top: 5px">
                </a>
                <p class="title">Douglas Zuqueto</p>
            </div>

            <div class="nav-menu">
                <ul id="nav-mobile" class="hide-on-med-and-down">
                    <li><a href="{{route('blog.index')}}" class="menu">Home</a></li>
                    <li><a href="{{route('blog.articles.index')}}" class="menu">Artigos</a></li>
                    <li><a href="{{route('blog.project.index')}}" class="menu">O Projeto</a></li>
                    <li><a href="{{route('blog.news.index')}}" class="menu">Notícias</a></li>
                    <li><a href="{{route('blog.about-me.index')}}" class="menu">Sobre Mim</a></li>
                    <li><a href="{{route('blog.contact.index')}}" class="menu">Contato</a></li>
                </ul>
            </div>

            {{--<div class="nav-right">--}}
                {{--<ul>--}}
                    {{--<li><a href=""><span class="material-icons">info_outline</span></a></li>--}}
                    {{--<li><a href=""><span class="material-icons">info_outline</span></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        </div>
    </nav>
    <div class="l12 hide-on-med-and-down center" style="height: 85px">
        {{--    <img src="{{asset('images/esp8266.jpg')}}" alt="" class="responsive-img" style="height: 300px">--}}
    </div>
</div>
