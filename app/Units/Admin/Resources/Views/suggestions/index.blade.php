@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Sugestões</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th width="10%" class="center-align">Votos</th>
                        <th width="10%" class="center-align">Status</th>
                        <th width="10%" class="center-align">#</th>
                        <th width="10%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td class="center-align">{{$row->votes}}</td>
                            <td class="center-align">
                                <i class="material-icons {{$row->state ? 'green-text' : ''}}">visibility</i>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.suggestions.edit', $row->id)}}">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                            </td>
                            <td class="center-align">
                                <a class="removeSuggestion" href="#" data-id="{{$row->id}}">
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
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large blue">
            <i class="large material-icons">settings</i>
        </a>
        <ul>
            <li>
                <a href="{{route('admin.suggestions.create')}}" class="btn-floating green">
                    <i class="material-icons">save</i>
                </a>
            </li>
        </ul>
    </div>
    <script>
        $(document).ready(function () {
            $('.removeSuggestion').click(function () {
                removeSuggestion($(this).attr('data-id'))
            })
        });

        function removeSuggestion(suggestions_id) {
            $.ajax({
                url: '/suggestions/' + suggestions_id,
                method: 'POST',
                data: {
                    '_token': window.Laravel.csrfToken,
                    '_method': 'DELETE',
                    'state': 0
                },
                success: function (data) {
                    Materialize.toast(data.error_message, 1000, null, function () {
                        location.reload();
                    });
                }
            });
        }
    </script>

@endsection