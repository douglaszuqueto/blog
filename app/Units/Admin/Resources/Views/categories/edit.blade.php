@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Atualizar Categoria</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST"
                  action="{{ route('admin.categories.update', ['id' => $item->id])}}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PUT">

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="category" class="active">Categoria</label>

                        <input type="text" id="category" name="category" value="{{$item->category}}" required>

                        @if ($errors->has('category'))
                            <strong>{{ $errors->first('category') }}</strong>
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