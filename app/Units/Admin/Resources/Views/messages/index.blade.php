@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Mensagens</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Email</th>
                        <th>Assunto</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><span class="">Ativado</span></td>
                            <td><span class="">Editar</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection