@extends('blog::layout')

@section('content')
    <div class="container index">
        <div class="row">
            <div class="col s12 l10 recentArticles">
                <div class="row">
                    <div class="col l5">
                        <img src="{{asset('images/IoT.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>

                    </div>
                    <div class="col l5">
                        <img src="{{asset('images/IoT.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>

                    </div>
                </div>
                <div class="row">
                    <div class="col l5">
                        <img src="{{asset('images/IoT.jpg')}}" class="responsive-img">
                        <p>Title sdasdsadsadsad</p>
                        <time class="" datetime="2016-10-22T16:14:31-02:00">22/10/2016 12:00</time>
                    </div>
                    <div class="col l5">
                        <img src="{{asset('images/IoT.jpg')}}" class="responsive-img">
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