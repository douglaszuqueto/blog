@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Notícias</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>
                                <span class="">Ativado</span>
                            </td>
                            <td><a href="{{$row->url}}" target="_blank"><i class="material-icons">language</i></a></td>
                            <td>
                                <a href="{{route('admin.news.edit', $row->id)}}">
                                    <i class="material-icons red-text">delete</i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.news.edit', $row->id)}}">
                                    <i class="material-icons">mode_edit</i>
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