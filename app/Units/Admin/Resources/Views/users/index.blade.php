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
                        <th width="10%" class="center-align">Status</th>
                        <th width="5%" class="center-align">#</th>
                        <th width="5%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td class="center-align">
                                <span class="">Ativado</span>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.users.edit', $row->id)}}">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.users.edit', $row->id)}}">
                                    <i class="material-icons red-text">delete</i>
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