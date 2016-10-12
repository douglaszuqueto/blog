@extends('admin::layout')

@section('content')
    <h3>Usuários</h3>
    <div class="col-md-6 col-md-offset-2">
        <table class="table">

            <thead>
            <tr>
                <th>Usuário</th>
                <th>Email</th>
                <th>Status</th>
                <th>#</th>
            </tr>

            </thead>
            <tbody>
            @foreach($itens as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        <span class="btn btn-xs btn-info">Ativado</span>
                    </td>
                    <td>
                        <a href="{{route('admin.users.edit', $row->id)}}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection