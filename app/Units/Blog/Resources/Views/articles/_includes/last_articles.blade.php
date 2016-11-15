@foreach($lastArticles as $last)
    <div class="row">
        <div class="col s3 l3">
            <a href="{{$last->url}}">
                <img src="{{$last->image_url}}" width="100%" style="margin: 10px 0 0 10px" alt="">
            </a>
        </div>
        <div class="col s9 l9">
            <a href="{{$last->url}}">
                <h6 style="font-weight: bold; font-size: 12pt">{{$last->title}}</h6>
            </a>
            <p style="font-size: 10pt">{{$last->subtitle}}</p>
        </div>
    </div>
    <div class="divider"></div>
@endforeach

