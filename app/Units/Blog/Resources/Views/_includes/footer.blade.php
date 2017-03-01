@inject('sponsors', 'App\Domains\Sponsors\Repositories\SponsorsRepository')
@inject('supporters', 'App\Domains\Supporters\Repositories\SupportersRepository')

<style>
  .fixed-action-btn {
    left: 23px !important;
  }
</style>

<div class="container">
  <div class="row">
    <section class="col s12 m4 l4 social">
      <h5 class="white-text">Social</h5>

      <ul class="redes-sociais">
        <li>
          <h6>
            <a href="https://www.facebook.com/douglaszuquetooficial" title="Facebook" target="_blank"
               class="facebook">
              <span class="hide">Facebook</span>
            </a>
          </h6>
        </li>
        <li>
          <h6>
            <a href="https://www.instagram.com/douglaszuquetooficial" title="Instagram" target="_blank"
               class="instagram">
              <span class="hide">Instagram</span>
            </a>
          </h6>
        </li>
        <li>
          <h6>
            <a href="https://www.twitter.com/douglaszuqueto" title="Twitter" target="_blank"
               class="twitter">
              <span class="hide">Twitter</span>
            </a>
          </h6>
        </li>
        <li>
          <h6>
            <a href="https://github.com/douglaszuqueto" title="GitHub" target="_blank"
               class="github">
              <span class="hide">GitHub</span>
            </a>
          </h6>
        </li>
        <li>
          <h6>
            <a href="https://telegram.me/douglaszuqueto" title="Telegram" target="_blank"
               class="telegram">
              <span class="hide">Telegram</span>
            </a>
          </h6>
        </li>
      </ul>

    </section>

    <section class="col s12 m4 l4 patrocinadores">
      <h5 class="white-text ">Patrocinadores</h5>

      @if(count($sponsors->findWhere(['state' => 1])) == 0)
        <a href="{{route('blog.contact.index')}}">
          <p class="white-text" style="font-size: 12px">Deseja ser um Patrocinador? Entre em contato
            conosco</p>
        </a>
      @endif
      @foreach($sponsors->findWhere(['state' => 1]) as $sponsor)
        <h6>
          <a href="{{$sponsor->url}}" target="_blank">
            <img src="{{$sponsor->image_url}}"
                 class="responsive-img " width="70%" alt="{{$sponsor->sponsor}}"
                 title="{{$sponsor->sponsor}}">
            <span class="hide">{{$sponsor->sponsor}}</span>
          </a>
        </h6>
      @endforeach

    </section>
    <section class="col s12 m4 l4 apoiadores">
      <h5 class="white-text">Apoiadores</h5>
      @if(count($supporters->findWhere(['state' => 1])) == 0)
        <a href="{{route('blog.contact.index')}}">
          <p class="white-text" style="font-size: 12px">Deseja ser um Apoiador? Entre em contato
            conosco</p>
        </a>
      @endif
      @foreach($supporters->findWhere(['state' => 1]) as $supporter)
        <h6>
          <a href="{{$supporter->url}}" target="_blank">
            <img src="{{$supporter->image_url}}"
                 class="responsive-img " width="70%" alt="{{$supporter->supporter}}"
                 title="{{$supporter->supporter}}">
            <span class="hide">{{$supporter->supporter}}</span>
          </a>
        </h6>
      @endforeach
    </section>


  </div>
  <div class="row">
    <div class="col s12 m4 l4 digitalocean right">
      <a href="https://m.do.co/c/302f8d3a3de6" target="_blank">
        <img src="{{asset('images/digitalocean_vps.png')}}"
             class="responsive-img " width="60%" alt="Powered by Digital Ocean"
             title="Powered by Digital Ocean">
      </a>
    </div>
  </div>
</div>
<div class="footer-copyright">
  <div class="container">
    <div class="row center">
      <span class="flow-text">© 2016-2017 Douglas Zuqueto</span>
    </div>
  </div>
</div>

{{--<div class="fixed-action-btn ">--}}
{{--<a href="javascript:" class="btn-floating left btn-large waves-effect waves-light blue" onclick="notifications()">--}}
{{--<i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="Ativar notificações?">add_alert</i>--}}
{{--</a>--}}
{{--</div>--}}

<a href="javascript:" id="return-to-top" style="display: inline">
  <i class="material-icons">import_export</i>
</a>

<script>
  var pusher = new Pusher('a40d6974ca933a602c50', {
    encrypted: true
  });

  let channel = pusher.subscribe('articles');

  function notifications() {

    if (!("Notification" in window)) {
      alert("O browser utilizado não possui suporte à Notificações");
    }

    else if (Notification.permission === "granted") {
    }
    else if (Notification.permission !== 'denied') {
      Notification.requestPermission(function (permission) {
        if (permission === "granted") {
        }
      });
    }
  }

  channel.bind('new-article', function (data) {
    let message = JSON.parse(JSON.stringify(data));
    let options = {
      icon: 'https://blog.dev/images/logo_2.png',
    };
    var notification = new Notification(message.title, options);

    notification.onclick = function (event) {
      event.preventDefault();
      window.open(message.url, '_blank');
    }
  });

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