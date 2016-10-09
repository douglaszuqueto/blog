@extends('admin::layout')

@section('content')
    <h3>Mensagens</h3>
    <div class="col-md-8 col-md-offset-2">
        <table class="table">

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
                    <td><span class="btn btn-xs btn-info">Ativado</span></td>
                    <td><span class="glyphicon glyphicon-edit"></span></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection