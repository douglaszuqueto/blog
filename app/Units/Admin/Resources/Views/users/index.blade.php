@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Usuários</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table bordered">
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
                                <span class="">Ativado</span>
                            </td>
                            <td>
                                <a href="{{route('admin.users.edit', $row->id)}}">
                                    <span class="">Editar</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection