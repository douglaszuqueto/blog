<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="@douglaszuqueto">
    <meta name="apple-mobile-web-app-title" content="@douglaszuqueto">
    <meta name="application-name" content="@douglaszuqueto">

    {!! app('seotools')->generate() !!}

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">

    <style>
        body {
            padding-top: 50px;
        }

        @media (min-width: 768px)
            .main {
                padding-right: 40px;
                padding-left: 40px;
            }

            .main {
                padding: 20px;
            }
    </style>

    <!-- Token for JS -->
    <script>
        window.Laravel = {!!   json_encode([
                'csrfToken' => csrf_token(),
            ])
        !!}
    </script>

</head>
<body>
@include('admin::_includes.navbar')

<div class="container-fluid">
    <div class="row">

        @include('admin::_header.header')

        <div class="">
            <div class="col-md-10 col-md-offset-2 main">
                @yield('content')
            </div>
        </div>
    </div>

</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
