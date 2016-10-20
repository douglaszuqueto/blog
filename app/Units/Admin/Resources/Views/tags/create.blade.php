@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Cadastrar Tag</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST" action="{{ route('admin.tags.store') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="tag">Tag</label>

                        <input type="text" id="tag" name="tag" required>

                        @if ($errors->has('tag'))
                            <strong>{{ $errors->first('tag') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12 ">
                        <button type="submit" class="waves-effect waves-light btn right">
                            <i class="material-icons right">cloud</i>Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection