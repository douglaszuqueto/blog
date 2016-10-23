<style>
    footer {
        height: 200px;
        background-color: #363839;
    }

    .footer-copyright {
        overflow: hidden;
        height: 50px;
        line-height: 50px;
        color: rgba(255, 255, 255, 0.8);
        background-color: #01579b !important;
        margin-top: 50px;
    }

    .container h5 {
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 1px;
        margin: 5px 0 10px;
        padding-top: 0;
        text-transform: uppercase;
    }

    .patrocinadores a, .apoiadores a {
        margin: 5px;
    }

</style>
@inject('sponsors', 'App\Domains\Sponsors\Repositories\SponsorsRepository')
@inject('supporters', 'App\Domains\Supporters\Repositories\SupportersRepository')

<div class="row">
    <div class="container">
        <div class="col l4">
            <h5 class="white-text">SOCIAL</h5>

            <li><a class="white-text" href="">Facebook</a></li>
            <li><a class="white-text" href="">Instagram</a></li>
            <li><a class="white-text" href="">Telegram</a></li>
            <li><a class="white-text" href="">GitHub</a></li>
        </div>
        <div class="col l4 patrocinadores">
            <h5 class="white-text center">PATROCINADORES</h5>

            @foreach($sponsors->findWhere(['state' => 1]) as $sponsor)
                <a href="{{$sponsor->url}}" target="_blank">
                    <img src="{{$sponsor->image_url}}"
                         class="responsive-img " width="20%" alt="{{$sponsor->sponsor}}" title="{{$sponsor->sponsor}}">
                </a>
            @endforeach

        </div>
        <div class="col l4 apoiadores">
            <h5 class="white-text center">APOIADORES</h5>

            @foreach($supporters->findWhere(['state' => 1]) as $supporter)
                <a href="{{$supporter->url}}" target="_blank">
                    <img src="{{$supporter->image_url}}"
                         class="responsive-img " width="20%" alt="{{$supporter->supporter}}"
                         title="{{$supporter->supporter}}">
                </a>
            @endforeach
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container">
        <div class="row center">
            <span class="flow-text">© 2016 Douglas Zuqueto.</span>
        </div>
    </div>
</div>