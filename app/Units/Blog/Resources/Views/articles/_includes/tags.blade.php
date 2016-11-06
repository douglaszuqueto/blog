@foreach($tags as $tag)
    <div class="chip grey lighten-3">
        <a href="{{route('blog.articles.searchByTag', ['tag' => $tag->tag])}}" class="blue-text">
            <h6>{{$tag->tag}}</h6>
        </a>
    </div>
@endforeach

