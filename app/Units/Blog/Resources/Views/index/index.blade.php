@extends('blog::layout')

@section('content')
    <div class="container index">
        <div class="row">
            <div class="col s12 l9 recentArticles">
                @foreach($lastArticles as $last)
                    <div class="article-item">
                        <a href="{{$last->url}}" class="article-image">
                            <img src="{{$last->image}}" class="responsive-img ">
                        </a>
                        <div class="article-title">
                            <a href="{{$last->url}}">
                                <h1>{{$last->title}}</h1>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col l3 right">
                <div class="top-articles">
                    {{--<h1 class="center">Artigos mais lidos</h1>--}}
                </div>
                <div class="divider"></div>
                <div class="fb-page"
                     data-href="https://www.facebook.com/douglaszuquetooficial/"
                     data-tabs="timeline"
                     data-small-header="true"
                     data-adapt-container-width="true"
                     data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/douglaszuquetooficial/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/douglaszuquetooficial/">Douglas Zuqueto</a></blockquote>
                </div>
            </div>
        </div>

@endsection