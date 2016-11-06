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
                        {!! $text !!}

                    </main>
                    <div class="divider"></div>
                    <footer class="comments">
                        <h3 class="hide">Comentários</h3>
                        @include('blog::_includes.disqus')
                    </footer>
                </article>
            </div>
            {{--<div class="col l3 offset-l1">--}}
                {{--<div class="" style="position: fixed">--}}

                    {{--<div class="row">--}}
                        {{--<h6>Artigos mais lidos</h6>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col l3">--}}
                            {{--<img src="{{$article->image}}" width="100%" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="col l9">--}}
                            {{--<h6 style="font-weight: bold">{{$article->title}}</h6>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="l12">--}}
                        {{--<h6>{{$article->subtitle}}</h6>--}}
                    {{--</div>--}}

                    {{--<div class="divider"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
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