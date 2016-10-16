@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Contato</h5>
        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th width="10%" class="center-align">Data</th>
                        <th width="10%" class="center-align">#</th>
                        <th width="10%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td class="center-align">{{date('d/m/Y', strtotime($row->created_at))}}</td>
                            <td class="center-align">
                                <a href="{{route('admin.contact.edit', $row->id)}}">
                                    <i class="material-icons blue-text">edit</i>
                                </a>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.contact.edit', $row->id)}}">
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