@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Contato</h5>
        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Assunto</th>
                        <th>Data</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->email}}</td>
                            <td>{{$row->subject}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>
                                <span class="">Ativado</span>
                            </td>
                            <td>
                                <a href="{{route('admin.contact.edit', $row->id)}}">
                                    <i class="material-icons red-text">delete</i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.contact.edit', $row->id)}}">
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