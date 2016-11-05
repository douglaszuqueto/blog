@extends('blog::layout')

@section('content')

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
    <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/atom-one-dark.css">

    <div class="container articles-view">
        <div class="row">
            <div class="col s12 l8 offset-l2">
                <article class="col s12 l12 article-view">
                    <header>
                        <h1>{{$article->title}}</h1>
                        <div class="author">
                            Por <strong>Douglas Zuqueto</strong>
                            - {{date('d-m-Y H:i', strtotime($article->created_at))}}
                        </div>
                    </header>
                    <div class="article-body">
                        <div>
                            <img src="{{$article->image}}" alt="{{$article->title}}" title="{{$article->title}}">
                        </div>
                        {!! $text !!}

                    </div>
                </article>
            </div>
            <div class="col s12 l8 offset-l2 comments">
                @include('blog::_includes.disqus')
            </div>
        </div>
    </div>
    <script>
        hljs.initHighlightingOnLoad();
    </script>


@endsection