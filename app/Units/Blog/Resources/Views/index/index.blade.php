@extends('blog::layout')

@section('content')
  <div class="container index">
    <div class="row">
      <section class="col s12 l9 recentArticles">
        <h1 class="hide">Últimos Artigos</h1>
        @foreach($lastArticles as $last)
          <article class="article-item">
            <a href="{{$last->url}}" class="article-image">
              <img src="{{$last->image_url}}" class="responsive-img" title="{{$last->title}}"
                   alt="{{$last->title}}">
            </a>
            <div class="article-title">
              <a href="{{$last->url}}">
                <h1>{{$last->title}}</h1>
              </a>
            </div>
          </article>
        @endforeach
      </section>

      <section class="col s12 l3 right">
        <h1 class="hide">Menu Lateral</h1>

        <h2 class="hide">Artigos mais lidos</h2>
        <div class="top-articles">
          {{--<h1 class="center">Artigos mais lidos</h1>--}}
        </div>
        {{--<div class="divider"></div>--}}
        <h2 class="hide">Fan Page</h2>
        <div class="fb-page"
             data-href="https://www.facebook.com/douglaszuquetooficial/"
             data-small-header="true"
             data-adapt-container-width="true"
             data-hide-cover="false">
          <blockquote cite="https://www.facebook.com/douglaszuquetooficial/" class="fb-xfbml-parse-ignore"><a
                href="https://www.facebook.com/douglaszuquetooficial/">Douglas Zuqueto</a></blockquote>
        </div>
      </section>
    </div>

@endsection