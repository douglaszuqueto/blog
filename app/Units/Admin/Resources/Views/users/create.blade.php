@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Cadastrar Usuário</h5>

        <div class="row">
            <form class="col l6 offset-l3" role="form" method="POST" action="{{ route('admin.users.store') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col l12">

                        <label for="name">Nome</label>

                        <input type="text" id="name" name="name" required>

                        @if ($errors->has('name'))
                            <strong>{{ $errors->first('name') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col l12">

                        <label for="email">Email</label>

                        <input type="email" id="email" name="email" required>

                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col l12">

                        <label for="password">Senha</label>

                        <input type="password" id="password" name="password" required>

                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
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