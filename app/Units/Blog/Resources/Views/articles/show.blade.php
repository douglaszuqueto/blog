@extends('blog::layout')

@section('content')
    <div class="container articles-view">
        <div class="row">
            <div class="col s12 l8 offset-l2">
                <article class="col s12 l12 article-view">
                    <header>
                        <h1>{{$article->title}}</h1>
                        <div>
                            Por <strong>Douglas Zuqueto</strong>
                            - {{date('d/m/Y H:i', strtotime($article->created_at))}}
                        </div>
                    </header>
                    <div class="article-body">
                        <p>{{$article->subtitle}}</p>

                        <div class="article-images center">
                            <img src="{{$article->image}}" alt="{{$article->title}}" title="{{$article->title}}">
                        </div>

                        <div class="article-content">
                            <p>
                                Nesse cenário, construiremos uma pequena aplicação que mandará informações para a
                                plataforma test.mosquitto.org. Essa plataforma nos disponibiliza um Broker MQTT para
                                fazer testes usando o protocolo, e também conta com um exemplo denominado "Demo
                                temperatura".
                            </p>

                            <div class="article-images center">
                                <img src="{{$article->image}}" alt="{{$article->title}}" title="{{$article->title}}">
                            </div>

                            <p>
                                Nesse cenário, construiremos uma pequena aplicação que mandará informações para a
                                plataforma test.mosquitto.org. Essa plataforma nos disponibiliza um Broker MQTT para
                                fazer testes usando o protocolo, e também conta com um exemplo denominado "Demo
                                temperatura".
                            </p>

                            <div class="article-images center">
                                <img src="{{$article->image}}" alt="{{$article->title}}" title="{{$article->title}}">
                            </div>

                            <p>
                                Nesse cenário, construiremos uma pequena aplicação que mandará informações para a
                                plataforma test.mosquitto.org. Essa plataforma nos disponibiliza um Broker MQTT para
                                fazer testes usando o protocolo, e também conta com um exemplo denominado "Demo
                                temperatura".
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </div>

@endsection