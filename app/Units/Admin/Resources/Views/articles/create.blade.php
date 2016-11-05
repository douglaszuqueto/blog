@extends('admin::layout')

@section('content')
    <script>
        $(document).ready(function () {
            $("#submit").click(function () {

                $.ajax({
                    url: '{{route('admin.articles.store')}}',
                    method: "POST",
                    data: {
                        'title': $('input[name="title"]').val(),
                        'subtitle': $('input[name="subtitle"]').val(),
                        'url': $('input[name="url"]').val(),
                        'text': editor.value(),
                        '_token': $('input[name="_token"]').val()

                    },
                    'success': function (data) {
                        console.log(data);
                    }
                });

                return false;
            })
        });
    </script>
    <div class="container">

        <h5>Cadastrar Artigo</h5>

        <div class="row">
            <form class="col l12" role="form" method="POST" href="#">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col l6">

                        <label for="title">Title</label>

                        <input type="text" id="title" name="title">

                        @if ($errors->has('title'))
                            <strong>{{ $errors->first('title') }}</strong>
                        @endif

                    </div>

                    <div class="input-field col l6">

                        <label for="subtitle">Subtitle</label>

                        <input type="text" id="subtitle" name="subtitle">

                        @if ($errors->has('subtitle'))
                            <strong>{{ $errors->first('subtitle') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="file-field input-field col l6">

                        <div class="btn btn-flat right">
                            <span>Imagem</span>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Image">
                        </div>


                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="col l12">
                    <textarea id="editor" name="text"></textarea>

                    <script>
                        var editor = new SimpleMDE({
                            element: document.getElementById("editor"),
                            spellChecker: false,
                        });


                    </script>
                </div>

                <div class="row">
                    <div class="input-field col l12 ">
                        <button id="submit" type="submit" class="waves-effect waves-light btn right">
                            <i class="material-icons right">cloud</i>Cadastrar
                        </button>
                    </div>
                </div>
            </form>
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

@endsection