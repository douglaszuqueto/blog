@extends('blog::layout')

@section('content')
    <div class="container index">
        <div class="row">
            <div class="col s12 l9 recentArticles">
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

            <div class="col l3">
                {{--@foreach($lastArticles as $article)--}}
                {{--<div class="row">--}}
                {{--<h6>{{$article->title}}</h6>--}}
                {{--</div>--}}
                {{--@endforeach--}}

                <div class="fb-page"
                     data-href="https://www.facebook.com/douglaszuquetooficial/"
                     data-tabs="timeline"
                     {{--data-width="250"--}}
                     data-small-header="true"
                     data-adapt-container-width="true"
                     data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/douglaszuquetooficial/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/douglaszuquetooficial/">Douglas Zuqueto</a></blockquote>
                </div>
            </div>
        </div>

    </div>

@endsection