@extends('blog::layout')

@section('content')

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
    <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/atom-one-dark.css">

    <div class="container articles-view">
        <div class="row">
            <div class="col s12 l8">
                <article class="col s12 l12 article-view">
                    <header>
                        <h1>{{$article->title}}</h1>
                        <div class="author">
                            Por <strong>Douglas Zuqueto</strong>
                            - {{date('d-m-Y H:i', strtotime($article->created_at))}}
                        </div>
                    </header>
                    <main class="article-body">
                        <div>
                            <img src="{{$article->image}}" alt="{{$article->title}}" title="{{$article->title}}">
                        </div>
                        {!! $article->text !!}

                    </main>
                    <div class="divider"></div>
                    <footer class="comments">
                        <h3 class="hide">Comentários</h3>
                        @include('blog::_includes.disqus')
                    </footer>
                </article>
            </div>
            <div class="col l4">
                <div class="col l12" style="background-color: white">
                    <h5 class="center blue white-text" style="border-radius: 4px">Buscar</h5>
                    @include('blog::articles._includes.search')
                </div>
                <div class="col l12" style="background-color: white">
                    <h5 class="center blue white-text" style="border-radius: 4px">Artigos recentes</h5>
                    @include('blog::articles._includes.last_articles')

                </div>
                <div class="col l12" style="background-color: white">
                    <h5 class="center blue white-text" style="border-radius: 4px">Filtrar por tags</h5>
                    {{--<h6 class="center">Em breve!</h6>--}}
                    @include('blog::articles._includes.tags')
                </div>

            </div>

        </div>
    </div>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script>
        $(document).ready(function () {
            $('ul li a').click(function () {
                var el = $(this).attr('href');
                console.log(el);

            })
        });
    </script>


@endsection