<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="Douglas Zuqueto">
    <meta name="application-name" content="Douglas Zuqueto">
    <meta name="theme-color" content="#008BD3">
    <link rel="shortcut icon" type="image/x-icon" href="https://douglaszuqueto.com/images/favicon.ico">
    <link rel="icon" type="image/png" href="https://douglaszuqueto.com/images/icons/android/favicon-36x36.png" sizes="36x36">
    <link rel="icon" type="image/png" href="https://douglaszuqueto.com/images/icons/android/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://douglaszuqueto.com/images/icons/android/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="57x57" href="https://douglaszuqueto.com/images/icons/ios/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="20x20" href="https://douglaszuqueto.com/images/icons/ios/apple-touch-icon-20x20.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://douglaszuqueto.com/images/icons/ios/apple-touch-icon-76x76.png">

    {!! app('seotools')->generate() !!}
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/c3.min.css')}}">

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>


    <script src="{{asset('js/d3.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/c3.min.js')}}"></script>
    <!-- Token for JS -->
    <script>
        window.Laravel = {!!   json_encode([
                'csrfToken' => csrf_token(),
            ])
        !!}
    </script>

</head>
<body>

@include('admin::_header.header')

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<script src="{{asset('js/materialize.min.js')}}"></script>

</body>
</html>
