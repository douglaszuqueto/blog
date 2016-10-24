@inject('sponsors', 'App\Domains\Sponsors\Repositories\SponsorsRepository')
@inject('supporters', 'App\Domains\Supporters\Repositories\SupportersRepository')

<div class="row">
    <div class="container">
        <div class="col s12 m4 l4 social">
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
        <div class="col s12 m4 l4 patrocinadores">
            <h5 class="white-text center">PATROCINADORES</h5>

            @foreach($sponsors->findWhere(['state' => 1]) as $sponsor)
                <a href="{{$sponsor->url}}" target="_blank">
                    <img src="{{$sponsor->image_url}}"
                         class="responsive-img " width="20%" alt="{{$sponsor->sponsor}}" title="{{$sponsor->sponsor}}">
                </a>
            @endforeach

        </div>
        <div class="col s12 m4 l4 apoiadores">
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