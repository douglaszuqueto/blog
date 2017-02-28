@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Newsletter</h5>

    <div class="row">
      <div class="col s12 m10 l10 offset-l1">
        <table class="table highlight">
          <thead>
          <tr>
            <th width="70%">Campanha</th>
            <th width="10%" class="center-align">Status</th>
            <th width="10%" class="center-align">#</th>
            <th width="10%" class="center-align">Send</th>
          </tr>
          </thead>
          <tbody>
          @foreach($itens as $row)
            <tr>
              <td>{{$row->campaign}}</td>
              <td class="center-align">
                <i class="material-icons {{$row->state ? 'green-text' : ''}}">visibility</i>
              </td>
              <td class="center-align">
                <a href="{{route('admin.newsletter.edit', $row->id)}}">
                  <i class="material-icons">mode_edit</i>
                </a>
              </td>
              <td class="center-align">
                @if($row->send == 2)
                  <a href="{{route('admin.newsletter.send', $row->id)}}">
                    <i class="material-icons">email</i>
                  </a>
                @else
                  <a href="#" class="black-text">
                    <i class="material-icons">email</i>
                  </a>
                @endif
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
        <a href="{{route('admin.newsletter.create')}}" class="btn-floating green">
          <i class="material-icons">save</i>
        </a>
      </li>
      <li>
        <a href="{{route('admin.subscribers.index')}}" class="btn-floating yellow">
          <i class="material-icons">contacts</i>
        </a>
      </li>
    </ul>
  </div>
@endsection