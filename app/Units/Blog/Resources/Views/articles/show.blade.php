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
                            <img src="{{$article->image_url}}" alt="{{$article->title}}" title="{{$article->title}}">
                        </div>
                        <div class="article-text">
                            {!! $article->text !!}
                        </div>
                    </main>
                    <div class="divider"></div>
                    @if(env('APP_COMMENTS'))
                        <footer class="comments">
                            <h2 class="hide">Comentários</h2>
                            @include('blog::_includes.disqus')
                        </footer>
                    @endif
                </article>
            </div>
            <div class="col s12 l4">
                <div class="col s12" style="background-color: white">
                    <h5 class="center blue white-text" style="border-radius: 4px">Buscar</h5>
                    @include('blog::articles._includes.search')
                </div>
                <div class="col s12" style="background-color: white">
                    <h5 class="center blue white-text" style="border-radius: 4px">Filtrar por tags</h5>
                    @include('blog::articles._includes.tags')
                </div>
                <div class="col s12" style="background-color: white">
                    <h5 class="center blue white-text" style="border-radius: 4px">Artigos recentes</h5>
                    @include('blog::articles._includes.last_articles')

                </div>

            </div>

        </div>
    </div>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script>
        $(document).ready(function () {
            $('.article-text img').materialbox();
        });
    </script>


@endsection