@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Atualizar Apoiador</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST"
                  action="{{ route('admin.supporters.update', ['id' => $item->id])}}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PUT">

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="supporter" class="active">Apoiador</label>

                        <input type="text" id="supporter" name="supporter" value="{{$item->supporter}}" required>

                        @if ($errors->has('title'))
                            <strong>{{ $errors->first('title') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="url" class="active">Url</label>

                        <input type="url" id="url" name="url" value="{{$item->url}}" required>

                        @if ($errors->has('url'))
                            <strong>{{ $errors->first('url') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="file-field input-field col s12 l12">

                        <div class="btn btn-flat right">
                            <span>Imagem</span>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Image">
                        </div>


                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif

                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="col s12 l12">
                            <input type="checkbox" id="state" name="state" {{$item->state ? 'checked' : ''}}/>
                            <label for="state">Status</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12 ">
                        <button type="submit" class="waves-effect waves-light btn right">
                            <i class="material-icons right">cloud</i>Atualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection