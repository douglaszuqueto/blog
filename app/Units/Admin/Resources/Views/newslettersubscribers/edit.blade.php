@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Atualizar Subscriber</h5>

    <div class="row">
      <form class="col s12 l6 offset-l3" role="form" method="POST"
            action="{{ route('admin.subscribers.update', ['id' => $item->id])}}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required value="{{$item->name}}">

            @if ($errors->has('campaign'))
              <strong>{{ $errors->first('campaign') }}</strong>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="{{$item->email}}">

            @if ($errors->has('campaign'))
              <strong>{{ $errors->first('campaign') }}</strong>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col l12">
            <select name="state">
              <option value="0" {{$item->state == 0 ? 'selected' : ''}}>Desativado</option>
              <option value="1" {{$item->state == 1 ? 'selected' : ''}}>Ativado</option>
              </option>
            </select>
            <label class="active">Status</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12 ">
            <button type="submit" class="waves-effect waves-light btn right green">
              <i class="material-icons right">cloud</i>Atualizar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue">
      <i class="large material-icons">settings</i>
    </a>
    <ul>
      <li>
        <a href="{{route('admin.subscribers.index')}}" class="btn-floating yellow">
          <i class="material-icons">contacts</i>
        </a>
      </li>
    </ul>
  </div>
  <script>
    $(document).ready(function () {
      $('select').material_select();
    });
  </script>

@endsection