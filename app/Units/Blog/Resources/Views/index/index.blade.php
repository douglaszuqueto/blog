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
        width: 70%;
    }

    .recentArticles > .row {
        height: 220px;
    }

    /*.row {*/
    /*margin-bottom: 10px !important;*/
    /*}*/
</style>
@section('content')
    <div class="container index">
        <div class="row">
            <div class="col s12 l10 recentArticles">
                <div class="row">
                    <div class="col l5">
                        <img src="{{asset('images/esp8266.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>

                    </div>
                    <div class="col l5">
                        <img src="{{asset('images/esp8266.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>

                    </div>
                </div>
                <div class="row">
                    <div class="col l5">
                        <img src="{{asset('images/esp8266.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>
                    </div>
                    <div class="col l5">
                        <img src="{{asset('images/esp8266.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>

                    </div>
                </div>
            </div>

            <div class="col l2">
                @foreach($lastArticles as $article)
                    <div class="row">
                        <h4>{{$article->title}}</h4>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection