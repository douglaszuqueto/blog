@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Nova Mensagem</h5>
    <div class="row">
      <div class="col s12 m10 l10 offset-l1">
        <p><span style="font-weight: bold">Nome:</span> {{$item->name}}</p>
        <p><span style="font-weight: bold">Email:</span> {{$item->email}}</p>
        <p><span style="font-weight: bold">Assunto:</span> {{$item->subject}}</p>
        <p><span style="font-weight: bold">Mensagem:</span> {{$item->message}}</p>
      </div>

      <div class="col s12">
        <button type="submit" class="btn btn-success isRead" data-id="{{$item->id}}">Marcar como lida</button>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $('.isRead').click(function () {
        isRead($(this).attr('data-id'))
      })
    });

    function isRead(contact_id) {
      $.ajax({
        url: '/contact/' + contact_id,
        method: 'POST',
        data: {
          '_token': window.Laravel.csrfToken,
          '_method': 'PUT',
          'state': 1
        },
        success: function (data) {
          Materialize.toast('Mensagem marcada como lida', 2000, null, function () {
            location.reload();
          });
        }
      });
    }
  </script>

@endsection
