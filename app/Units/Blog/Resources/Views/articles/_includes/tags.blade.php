@foreach($tags as $tag)
    <div class="chip grey lighten-3">
        <a href="" class="blue-text">
            <h6>{{$tag->tag}}</h6>
        </a>
    </div>
@endforeach

