@extends('admin::layout')

@section('content')
    <h3>Notícias</h3>
    <div class="col-md-8 col-md-offset-2">
        <table class="table">

            <thead>
            <tr>
                <th>Titulo</th>
                <th>Url</th>
                <th>Data</th>
                <th>#</th>
            </tr>

            </thead>
            <tbody>
            @foreach($news as $row)
                <tr>
                    <td>{{$row->title}}</td>
                    <td><a href="{{$row->url}}" target="_blank">Link</a></td>
                    <td>{{$row->created_at}}</td>
                    <td>
                        <span class="btn btn-xs btn-info">Ativado</span>
                    </td>
                    <td>
                        <a href="{{route('admin.news.edit', $row->id)}}">
                            <span class="glyphicon glyphicon-edit btn btn-xs btn-success"></span>
                        </a>

                        <a href="{{route('admin.news.edit', $row->id)}}">
                            <span class="glyphicon glyphicon-trash btn btn-xs btn-danger"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection