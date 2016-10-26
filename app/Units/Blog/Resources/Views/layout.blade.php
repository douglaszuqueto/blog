<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="douglaszuqueto">
    <meta name="application-name" content="douglaszuqueto">
    <meta name="theme-color" content="#008BD3">


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
</body>
</html>
