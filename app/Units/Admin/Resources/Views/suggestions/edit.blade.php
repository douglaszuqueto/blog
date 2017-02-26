@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Atualizar Sugestão</h5>

    <div class="row">
      <form class="col s12 l6 offset-l3" role="form" method="POST" enctype="multipart/form-data"
            action="{{ route('admin.suggestions.update', ['id' => $item->id])}}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required value="{{$item->title}}">

            @if ($errors->has('title'))
              <strong>{{ $errors->first('title') }}</strong>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col l12">
            <select name="state">
              <option value="3" {{$item->state == 3 ? 'selected' : ''}}>Esta sugestão foi atendida.</option>
              <option value="2" {{$item->state == 2 ? 'selected' : ''}}>Esta sugestão está sendo implementada.</option>
              <option value="1" {{$item->state == 1 ? 'selected' : ''}}>Esta sugestão está aguardando aprovação.
              </option>
              <option value="0">Não Visível.</option>
            </select>
            <label class="active">Status</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12">
                        <textarea id="description" name="description" class="materialize-textarea"
                                  required>{{$item->description}}</textarea>
            <label for="description">Description</label>

            @if ($errors->has('description'))
              <strong>{{ $errors->first('description') }}</strong>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required value="{{$item->name}}">

            @if ($errors->has('name'))
              <strong>{{ $errors->first('name') }}</strong>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{$item->email}}">

            @if ($errors->has('email'))
              <strong>{{ $errors->first('email') }}</strong>
            @endif
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
  <script>
    $(document).ready(function () {
      $('select').material_select();
    });
  </script>

@endsection