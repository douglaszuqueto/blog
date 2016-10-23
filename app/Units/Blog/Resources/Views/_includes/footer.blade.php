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

    .patrocinadores h5, .apoiadores h5, .social h5 {
        margin: 15px;
    }

    .patrocinadores a, .apoiadores a {
        margin: 5px;
    }

    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        width: 50px;
        height: 50px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 19px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }

    #return-to-top:hover i {
        color: #fff;
        /*top: 5px;*/
    }

</style>
@inject('sponsors', 'App\Domains\Sponsors\Repositories\SponsorsRepository')
@inject('supporters', 'App\Domains\Supporters\Repositories\SupportersRepository')

<div class="row">
    <div class="container">
        <div class="col l4 social">
            <h5 class="white-text">SOCIAL</h5>

            <li>
                <a class="white-text" href="https://www.facebook.com/douglaszuquetooficial"
                   title="Facebook" target="_blank">Facebook</a>
            </li>
            <li>
                <a class="white-text" href="https://www.instagram.com/douglaszuquetooficial/" title="Instagram"
                   target="_blank">Instagram</a>
            </li>
            <li>
                <a class="white-text" href="https://telegram.me/douglaszuqueto" title="Telegram" target="_blank">Telegram</a>
            </li>
            <li>
                <a class="white-text" href="https://github.com/douglaszuqueto" title="GitHub" target="_blank">GitHub</a>
            </li>
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
<a href="javascript:" id="return-to-top">
    <i class="material-icons">import_export</i>
</a>

<script>
    // Source: https://codepen.io/rdallaire/pen/apoyx
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function () {      // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0                       // Scroll to top of body
        }, 500);
    });
</script>