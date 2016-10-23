<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="douglaszuqueto">
    <meta name="application-name" content="douglaszuqueto">
    <meta name="theme-color" content="#008BD3">


    {!! app('seotools')->generate() !!}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">


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
    @include('home::_includes.header')
</header>

<main>
    <div class="">
        @yield('content')
    </div>
</main>

<footer>
    @include('home::_includes.footer')
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
</body>
</html>
