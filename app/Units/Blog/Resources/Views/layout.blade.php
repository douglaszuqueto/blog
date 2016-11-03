<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta name="apple-mobile-web-app-title" content="Douglas Zuqueto">
    <meta name="application-name" content="Douglas Zuqueto">
    <meta name="theme-color" content="#008BD3">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

    <link rel="icon" type="image/png" href="{{asset('images/icons/android/favicon-36x36.png')}}" sizes="36x36">
    <link rel="icon" type="image/png" href="{{asset('images/icons/android/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('images/icons/android/favicon-192x192.png')}}" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/icons/ios/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="20x20" href="{{asset('images/icons/ios/apple-touch-icon-20x20.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/icons/ios/apple-touch-icon-76x76.png')}}">

    {!! app('seotools')->generate() !!}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Token for JS -->
    <script>
        window.Laravel = {!!   json_encode([
                'csrfToken' => csrf_token(),
            ])
        !!}
    </script>

</head>
<body>

<header>
    @include('blog::_includes.header')
</header>

<main>
    <div class="">
        @yield('content')
    </div>
</main>

<footer>
    @include('blog::_includes.footer')
</footer>
<script src="{{asset('js/materialize.min.js')}}"></script>

<script>

    var path = window.location.pathname.split("/")[1];
    var url = window.location.href;

    if (path === '') {
        var target = $('ul li a[href="' + window.location.href.slice(0, -1) + '"]');
        target.addClass('active');
    }
    var target = $('ul li a[href="' + url + '"]');
    target.addClass('active');


</script>
<div id="fb-root"></div>
@if(env('APP_ENV') == 'production')
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-73205063-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=191652421276345";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5808c7bd4956dafc"></script>
@endif

</body>
</html>
