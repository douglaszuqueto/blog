@extends('admin::layout')

@section('content')
    <h3>Usuário</h3>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.users.update', $item->id) }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">name</label>

            <div class="col-md-6">
                <input id="name" type="name" class="form-control" name="name" value="{{ $item->name }}">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $item->email }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" value="{{ $item->password }}">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="row">

                <div class="col-md-6">
                    <input type="reset" class="btn btn-info col-md-3" value="Limpar Campos">
                </div>
                <div class="col md 6">
                    <button type="submit" class="btn btn-success col-md-3">Salvar</button>
                </div>
            </div>

        </div>

    </form>



@endsection