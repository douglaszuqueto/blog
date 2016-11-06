@foreach($lastArticles as $last)
    <div class="row">
        <div class="col l3">
            <a href="{{$last->url}}">
                <img src="{{$last->image}}" width="100%" style="margin: 10px 0 0 10px" alt="">
            </a>
        </div>
        <div class="col l9">
            <a href="">
                <h6 style="font-weight: bold; font-size: 12pt">{{$last->title}}</h6>
            </a>
            <p style="font-size: 10pt">{{$last->subtitle}}</p>
        </div>
    </div>
    <div class="divider"></div>
@endforeach

