@extends('admin::layout')

@section('content')
  <div class="container">

    <h5>Cadastrar Newsletter</h5>

    <div class="row">
      <form class="col s12 l6 offset-l3" role="form" method="POST"
            enctype="multipart/form-data" action="{{ route('admin.newsletter.store') }}">
        {{ csrf_field() }}

        <div class="row">
          <div class="input-field col s12 l12">
            <label for="campaign">Campaign</label>
            <input type="text" id="campaign" name="campaign" required>

            @if ($errors->has('campaign'))
              <strong>{{ $errors->first('campaign') }}</strong>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 l12 ">
            <button type="submit" class="waves-effect waves-light btn right green">
              <i class="material-icons right">cloud</i>Cadastrar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection