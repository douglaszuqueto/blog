@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Notícias</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table bordored">

                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Url</th>
                        <th>Data</th>
                        <th>#</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td><a href="{{$row->url}}" target="_blank">Link</a></td>
                            <td>{{$row->created_at}}</td>
                            <td>
                                <span class="">Ativado</span>
                            </td>
                            <td>
                                <a href="{{route('admin.news.edit', $row->id)}}">
                                    <span class="">Remover</span>
                                </a>


                            </td>
                            <td>
                                <a href="{{route('admin.news.edit', $row->id)}}">
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