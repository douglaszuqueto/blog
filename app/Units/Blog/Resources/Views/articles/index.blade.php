@extends('blog::layout')

@section('content')
  <div class="container articles">
    <div class="row">
      <section class="col s12 l8">
        <h1>Artigos</h1>

        @if(count($articles) == 0)
          <h4>Nenhum artigo encontrado.</h4>
        @endif

        @foreach($articles as $article)
          <div class="col s12 l6 card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="{{$article->url}}">
                <img src="{{$article->image_url}}">
              </a>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">
                <i class="material-icons right blue-text">more_vert</i>
              </span>
              <h2><a href="{{$article->url}}">{{$article->title}}</a></h2>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">
                <i class="material-icons right">close</i>
              </span>
              <p>{{$article->subtitle}}</p>
              @foreach($article->tags as $tag)
                <div class="chip">
                  <a href="{{route('blog.articles.searchByTag', ['tag' => $tag->tag])}}">
                    {{$tag->tag}}
                  </a>
                </div>
              @endforeach
            </div>
          </div>
          {{--<article class="col s12 l6 article">--}}
          {{--<div class="row article-header">--}}
          {{--<div class="col s12">--}}
          {{--<h2>--}}
          {{--<a href="{{$article->url}}" class="card-title"> {{$article->title}} </a>--}}
          {{--</h2>--}}
          {{--</div>--}}
          {{--<div class="col s12 center">--}}
          {{--<a href="{{$article->url}}">--}}
          {{--<img src="{{$article->image_url}}" class="responsive-img">--}}
          {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col s12 subtitle">--}}
          {{--<p>{{$article->subtitle}}</p>--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col s12">--}}
          {{--<div class="row">--}}
          {{--@foreach($article->tags as $tag)--}}
          {{--<div class="chip">--}}
          {{--<a href="{{route('blog.articles.searchByTag', ['tag' => $tag->tag])}}">--}}
          {{--{{$tag->tag}}--}}
          {{--</a>--}}
          {{--</div>--}}
          {{--@endforeach--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--</article>--}}
        @endforeach

      </section>
      <div class="col s12 l4">
        <div class="col s12" style="background-color: white">
          <h5 class="center blue white-text" style="border-radius: 4px">Buscar</h5>
          @include('blog::articles._includes.search')
        </div>
        <div class="col s12" style="background-color: white">
          <h5 class="center blue white-text" style="border-radius: 4px">Newsletter</h5>
          @include('blog::articles._includes.newsletter')
        </div>
        <div class="col s12" style="background-color: white">
          <h5 class="center blue white-text" style="border-radius: 4px">Filtrar por tags</h5>
          {{--<h6 class="center">Em breve!</h6>--}}
          @include('blog::articles._includes.tags')
        </div>
      </div>
    </div>

  </div>

@endsection