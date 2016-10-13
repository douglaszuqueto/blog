@extends('admin::layout')

@section('content')
    <div class="container">

        <h3>Contato</h3>
        <div class="col-md-8 col-md-offset-2">
            <table class="table">

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
                            <span class="btn btn-xs btn-success">Ativado</span>
                        </td>
                        <td>
                            <a href="{{route('admin.contact.edit', $row->id)}}">
                                <span class="glyphicon glyphicon-edit btn btn-xs btn-success"></span>
                            </a>


                        </td>
                        <td>
                            <a href="{{route('admin.contact.edit', $row->id)}}">
                                <span class="glyphicon glyphicon-trash btn btn-xs btn-danger"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection