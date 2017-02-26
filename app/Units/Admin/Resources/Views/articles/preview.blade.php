@extends('admin::layout')

@section('content')

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
    <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/atom-one-dark.css">

    <div class="container">

        <div class="col-l12">
            <div class="row">
                <div class="col l8 offset-l2 article-preview">
                    <h1>{{$item->title}}</h1>
                    {!! $text !!}
                </div>
            </div>
        </div>
        @include('admin::articles._includes.btn-floating', [
  'btns' => [
          [ 'href' => route('admin.articles.index') ,
          'icon' => 'comment',
          'color' => 'blue'
          ],
          [ 'href' => route('admin.articles.create') ,
          'icon' => 'save',
          'color' => 'green'
          ],
          [ 'href' => route('admin.articles.shedule') ,
          'icon' => 'alarm_on',
          'color' => 'red'
          ]
          ]
  ])


        <style>
            /* Artigo: Preview*/

            .article-preview {
                /*background: #F0F0F0;*/
                font-family: 'Miriam Libre', sans-serif;

            }

            .article-preview h1 {
                font-weight: 600 !important;
                color: #2b2b2b;
                letter-spacing: -.02em;
                font-size: 22pt;
            }

            .article-preview p {
                text-align: justify;
            }

            .article-preview p::first-letter {
                text-transform: capitalize;
                font-size: 14pt !important;
                font-weight: bold;
            }

            .article-preview p img {
                width: 80%;
                height: auto;
                margin: 0 auto;
                display: block;
            }

            /* ################################ */
        </style>

        <script>
          hljs.initHighlightingOnLoad();
        </script>


@endsection