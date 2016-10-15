@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Cadastrar Patrocinador</h5>

        <div class="row">
            <form class="col l6 offset-l3" role="form" method="POST" action="{{ route('admin.sponsors.store') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col l12">

                        <label for="sponsor">Patrocinador</label>

                        <input type="text" id="sponsor" name="sponsor" required>

                        @if ($errors->has('sponsor'))
                            <strong>{{ $errors->first('sponsor') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col l12">

                        <label for="url">Url</label>

                        <input type="url" id="url" name="url" required>

                        @if ($errors->has('url'))
                            <strong>{{ $errors->first('url') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col l12 ">
                        <button type="submit" class="waves-effect waves-light btn right">
                            <i class="material-icons right">cloud</i>Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection