@extends('blog::layout')

@section('content')
  <div class="container suggestions">
    <div class="row">
      <section class="col s12 l10 offset-l1 ">
        <h5 class="center">
          Fábrica de Artigos
        </h5>
        <br>
        <br>
        @if (session('message'))
          <div class="col s12">
            <p>{{ session('message') }}</p>
          </div>
        @endif

        <a href="#suggestion_submit" class="suggestion_submit waves-effect waves-light btn right blue">
          <i class="material-icons right">note_add</i>Submeter sugestão
        </a>

        <div id="suggestion_submit" class="modal">
          <div class="modal-content">
            @include('blog::suggestions.create')
          </div>
          <div class="modal-footer">
            <br>
            <br>
          </div>
        </div>
        @if(count($suggestions) > 0)
          <table class="table highlight">
            <thead>
            <tr>
              <th width="15%" class="center-align">Votos</th>
              <th width="75%">Título</th>
              <th width="10%" class="center-align">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suggestions as $row)
              <tr>
                <td class="center-align ">
                  <div class="vote-badge"
                       style="background: {{$row->state == 2 || $row->state == 3 ? '#757575' : '#66bb6a'}}">
                    <a href="#" class="white-text vote"
                       data-id="{{$row->id}}" {{$row->state == 2 || $row->state == 3 ? 'disabled' : ''}}>
                      <i class="vote-icon material-icons ">thumb_up</i>
                    </a>
                    <p class="vote-votes"><span class="vote-{{$row->id}}">{{$row->votes}}</span> Votos</p>
                  </div>

                </td>
                <td>{{$row->title}}</td>
                <td class="center-align">{!! $row->state_ !!}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        @else
          <p>Ainda não há nenhuma sugestão cadastrada em nossa plataforma!</p>
        @endif
      </section>
    </div>

  </div>
  <style>
    .vote-badge {
      background: #66bb6a;
      border-radius: 10px;
      max-width: 100%;
      color: #FFF;
    }

    .vote-icon {
      padding-top: 10px;
      cursor: pointer;
    }

    .vote-votes {
      margin-top: -5px;
    }

  </style>
  <script>
    $(document).ready(function () {
      $('.suggestion_submit').leanModal();

      $('.vote').on('click', function () {
        let suggestion_id = $(this).data('id');
        let votesTarget = $('.vote-' + suggestion_id);

        if ($(this).attr('disabled')) {
          Materialize.toast('Esta sugestão já está em desenvolvimento ou já foi desenvolvida', 2000);
          return false;
        }

        if (!JSON.parse(window.localStorage.getItem('isVoted-' + suggestion_id))) {
          window.localStorage.setItem('isVoted-' + suggestion_id, JSON.stringify({
            'id': suggestion_id,
            'state': false
          }));
        }

        let voted = JSON.parse(window.localStorage.getItem('isVoted-' + suggestion_id));

        if (voted.state === true && voted.id === suggestion_id) {
          Materialize.toast('Você já votou nesta sugestão', 2000);
          return false;
        }

        if (voted.state === false && voted.id === suggestion_id) {

          $.ajax({
            url: '/fabrica-de-artigos/voto/' + suggestion_id,
            method: 'POST',
            data: {
              '_token': window.Laravel.csrfToken,
              '_method': 'PUT'
            },
            success: function (data) {
              Materialize.toast(data.error_message, 1000, null, function () {

                window.localStorage.setItem('isVoted-' + suggestion_id, JSON.stringify({
                  'id': suggestion_id,
                  'state': true
                }));
                window.location.reload();
              });
            }
          });
        }

        return false;
      });

    })
    ;
  </script>
@endsection