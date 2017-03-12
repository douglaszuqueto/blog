@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Usuários</h5>

    <div class="row">
      <div class="col s12 m10 l10 offset-l1">
        <table class="table bordered">
          <thead>
          <tr>
            <th>Usuário</th>
            <th class="hide-on-small-only">Email</th>
            <th width="5%" class="center-align">#</th>
            <th width="5%" class="center-align">#</th>
            <th width="5%" class="center-align">#</th>
          </tr>
          </thead>
          <tbody>
          @foreach($itens as $row)
            <tr>
              <td>{{$row->name}}</td>
              <td class="hide-on-small-only">{{$row->email}}</td>
              <td class="center-align">
                <i class="material-icons {{$row->state ? 'green-text' : '' }}">visibility</i>
              </td>
              <td class="center-align">
                <a href="{{route('admin.users.edit', $row->id)}}">
                  <i class="material-icons">mode_edit</i>
                </a>
              </td>
              <td class="center-align">
                <a class="removeUser" href="#" data-id="{{$row->id}}">
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
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue">
      <i class="large material-icons">settings</i>
    </a>
    <ul>
      <li>
        <a href="{{route('admin.users.create')}}" class="btn-floating green">
          <i class="material-icons">save</i>
        </a>
      </li>
    </ul>
  </div>
  <script>
    $(document).ready(function () {
      $('.removeUser').click(function () {
        removeUser($(this).attr('data-id'))
      })
    });

    function removeUser(user_id) {
      $.ajax({
        url: '/users/' + user_id,
        method: 'POST',
        data: {
          '_token': window.Laravel.csrfToken,
          '_method': 'PUT',
          'state': 0
        },
        success: function (data) {
          Materialize.toast('Usuário excluido', 2000);
        }
      });
    }
  </script>


@endsection
