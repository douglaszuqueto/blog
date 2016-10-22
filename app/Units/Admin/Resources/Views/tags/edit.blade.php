@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Atualizar Tag</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST"
                  action="{{ route('admin.tags.update', ['id' => $item->id])}}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PUT">

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="tag" class="active">Tag</label>

                        <input type="text" id="tag" name="tag" value="{{$item->tag}}" required>

                        @if ($errors->has('tag'))
                            <strong>{{ $errors->first('tag') }}</strong>
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