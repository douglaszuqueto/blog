@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Artigos</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th width="10%" class="center-align">Status</th>
                        <th width="10%" class="center-align">#</th>
                        <th width="10%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td class="center-align">
                                <span>{!! $row->state !!}</span>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.articles.edit', $row->id)}}">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                            </td>
                            <td class="center-align">
                                <a class="removeArticle" href="#" data-id="{{$row->id}}">
                                    <i class="material-icons red-text">delete</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
    <script>
      $(document).ready(function () {
        $('.removeArticle').click(function () {
          removeArticle($(this).attr('data-id'))
        })
      });

      function removeArticle(article_id) {
        $.ajax({
          url: '/articles/' + article_id,
          method: 'POST',
          data: {
            '_token': window.Laravel.csrfToken,
            '_method': 'PUT',
            'state': 0
          },
          success: function (data) {
            Materialize.toast('Artigo excluido', 2000, null, function () {
              location.reload();
            });

          }
        });
      }
    </script>

@endsection