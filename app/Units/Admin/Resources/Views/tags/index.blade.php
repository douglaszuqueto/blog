@extends('admin::layout')

@section('content')

    <div class="container">

        <h5>Tags</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Tag</th>
                        <th width="10%" class="center-align">Status</th>
                        <th width="10%" class="center-align">#</th>
                        <th width="10%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->tag}}</td>
                            <td class="center-align">
                                <i class="material-icons {{$row->state ? 'green-text' : ''}}">visibility</i>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.tags.edit', $row->id)}}">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                            </td>
                            <td class="center-align">
                                <a class="removeTag" href="#" data-id="{{$row->id}}">
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
    <script>
        $(document).ready(function () {
            $('.removeTag').click(function () {
                removeTag($(this).attr('data-id'))
            })
        });

        function removeTag(tag_id) {
            $.ajax({
                url: '/tags/' + tag_id,
                method: 'POST',
                data: {
                    '_token': window.Laravel.csrfToken,
                    '_method': 'PUT',
                    'state': 0
                },
                success: function (data) {
                    Materialize.toast('Tag excluida', 2000);

                }
            });
        }
    </script>

@endsection