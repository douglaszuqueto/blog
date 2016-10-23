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
            width: 95%;
        }

    }

    .card .card-content {
        padding: 5px !important;
    }

    .avatar img {
        width: 70%;
    }

    .row {
        margin-bottom: 10px !important;
    }
</style>
@section('content')
    <div class="container index">
        <div class="row">
            <div class="col s12 l10">
                <article class="col s12 l9 card">
                    <div class="card-content black-text">
                        <div class="row article-header">
                            <div class="col s12 l2">
                                <span class="avatar">
                                    <img src="https://douglaszuqueto.github.io/public/build/images/perfil.jpg"
                                         class="responsive-img circle">
                                </span>
                            </div>
                            <div class="col s12 l4">
                                <div class="row">
                                    <span class="author">Douglas Zuqueto</span>
                                </div>
                                <div class="row">
                                    <span>23/10/2016 12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="row article-image">
                            <div class="col s12 l12">
                                <img src="{{asset('images/esp8266.jpg')}}" class="responsive-img">
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row article-body">
                            <div class="col s12 l12">
                                <a href="" class="card-title black-text">Controlando Led usando MQTT e ESP8266</a>
                                {{--<p>I am a very simple card. I am good at containing small bits of information.</p>--}}
                            </div>
                        </div>
                    </div>

                    <div class="card-content" style="border-top: 1px solid rgba(160,160,160,0.2);">
                        <div class="article-footer">
                            <div class="chip">
                                <a href="">Tag 1</a>
                            </div>
                            <div class="chip">
                                <a href="">Tag 2</a>
                            </div>
                            <div class="chip">
                                <a href="">Tag 3</a>
                            </div>
                        </div>
                    </div>


                </article>
            </div>

            <div class="col l2">
                Rellateds
            </div>
        </div>

    </div>

@endsection