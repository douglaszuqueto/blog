@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Atualizar Newsletter</h5>

    <div class="row">
      <form class="col s12 l6 offset-l3" role="form" method="POST" enctype="multipart/form-data"
            action="{{ route('admin.newsletter.update', ['id' => $item->id])}}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="campaign">Campaign</label>
            <input type="text" id="campaign" name="campaign" required value="{{$item->campaign}}">

            @if ($errors->has('campaign'))
              <strong>{{ $errors->first('campaign') }}</strong>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col l12">
            <select name="state">
              <option value="0" {{$item->state == 0 ? 'selected' : ''}}>Desativada</option>
              <option value="1" {{$item->state == 1 ? 'selected' : ''}}>Ativada</option>
              </option>
            </select>
            <label class="active">Status</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col l12">
            <select>
              <option value="0" {{$item->send == 0 ? 'selected' : ''}}>Não Enviada</option>
              <option value="1" {{$item->send == 1 ? 'selected' : ''}}>Enviada</option>
              <option value="1" {{$item->send == 2 ? 'selected' : ''}}>Reenviada</option>
              </option>
            </select>
            <label class="active">Send</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12 ">
            <button type="submit" class="waves-effect waves-light btn left green">
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