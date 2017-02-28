@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Newsletter - Subscribers</h5>

    <div class="row">
      <div class="col s12 m10 l10 offset-l1">
        <table class="table highlight">
          <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th class="center-align">#</th>
          </tr>
          </thead>
          <tbody>
          @foreach($itens as $row)
            <tr>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->state}}</td>
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
    </ul>
  </div>
@endsection