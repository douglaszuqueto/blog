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
                        <th class="hide-on-small-only">Email</th>
                        <th width="5%" class="center-align">#</th>
                        <th width="5%" class="center-align">#</th>
                        <th width="5%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td class="hide-on-small-only">{{$row->email}}</td>
                            <td class="center-align">
                                <i class="material-icons">visibility</i>
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