@extends('admin::layout')

@section('content')
    <h3>News</h3>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.news.update', $item->id) }}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-4 control-label">title</label>

            <div class="col-md-6">
                <input id="title" type="title" class="form-control" name="title" value="{{ $item->title }}">

                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="url" class="col-md-4 control-label">url</label>

            <div class="col-md-6">
                <input id="url" type="url" class="form-control" name="url" value="{{ $item->url }}">

                @if ($errors->has('url'))
                    <span class="help-block">
                        <strong>{{ $errors->first('url') }}</strong>
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