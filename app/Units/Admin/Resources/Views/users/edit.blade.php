@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Editar Usuário</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST"
                  action="{{ route('admin.users.update', ['id' => $item->id]) }}">

                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="name" class="active">Nome</label>

                        <input type="text" id="name" name="name" value="{{$item->name}}" required>

                        @if ($errors->has('name'))
                            <strong>{{ $errors->first('name') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="email" class="active">Email</label>

                        <input type="email" id="email" name="email" value="{{$item->email}}" required>

                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="password" class="active">Password</label>

                        <input type="password" id="password" name="password">

                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <div class="col s12 l12">
                            <input type="checkbox" id="state" name="state" value="1" {{$item->state ? 'checked' : ''}}/>
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