@extends('home::layout')

<style>
    .index {
        background-color: #fafafa !important;
    }

    @media only screen and (max-width: 992px) {
        .container {
            width: 95%;
        }
    }

    @media only screen and (min-width: 993px) {
        .container {
            padding-left: 10px;
            width: 80% !important;
        }

    }

    .card .card-content {
        padding: 5px !important;
    }

    .avatar img {
        margin-top: 10px;
    }

</style>
@section('content')
    <div class="container index">
        <div class="row">
            <div class="col s12 l10">

                @foreach($articles as $article)
                    <article class="col s12 l9 card">
                        <div class="card-content black-text">
                            <div class="row article-header">
                                <div class="col s12 l12">
                                    <a href="{{$article->url}}" class="card-title black-text" style="font-weight: bold; font-size: 25px">
                                        <span>{{$article->title}}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row article-image">
                                <div class="col s12 l12">
                                    <a href="{{$article->url}}">
                                        <img src="{{$article->image}}" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row article-body">
                                <div class="col l12">
                                    <p>{{$article->subtitle}}</p>
                                </div>
                            </div>

                        </div>

                        <div class="card-content" style="border-top: 1px solid rgba(160,160,160,0.2);">
                            <div class="article-footer">
                                <div class="chip">
                                    <a href="" class="black-text">ESP8266</a>
                                </div>
                                <div class="chip">
                                    <a href="" class="black-text">IoT</a>
                                </div>
                                <div class="chip">
                                    <a href="" class="black-text">MQTT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l12">
                            <div class="row">
                                <span class="author">Por <strong>Douglas Zuqueto</strong></span>
                                <span class="right">{{$article->created_at}}</span>
                            </div>
                        </div>

                    </article>
                @endforeach

            </div>
        </div>

    </div>

@endsection