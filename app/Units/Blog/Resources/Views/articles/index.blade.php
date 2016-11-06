@extends('blog::layout')

@section('content')
    <div class="container articles">
        <div class="row">
            <section class="col s12 l8">
                <h1>Artigos</h1>

                @foreach($articles as $article)
                    <article class="article">
                        <div class="col s12">
                            <div class="row article-header">
                                <div class="col s12">
                                    <h2>
                                        <a href="{{$article->url}}" class="card-title"> {{$article->title}} </a>
                                    </h2>
                                </div>
                                <div class="col s12 center">
                                    <a href="{{$article->url}}">
                                        <img src="{{$article->image}}" class="responsive-img">
                                    </a>
                                </div>
                                <div class="col s12 subtitle">
                                    <p>{{$article->subtitle}}</p>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="row">
                                    @foreach($article->tags as $tag)
                                        <div class="chip">
                                            {{$tag->tag}}
                                            <i class="close material-icons" data-id="{{$tag->id}}">close</i>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

            </section>
            {{--<div class="col l4">--}}
            {{--<div class="row">--}}
            {{--<h2>Últimos artigos</h2>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>

@endsection