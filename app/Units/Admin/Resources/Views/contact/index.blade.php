@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Contato</h5>
        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table highlight">
                    <thead>
                    <tr>
                        <th>Subject</th>
                        <th width="10%" class="center-align">Data</th>
                        <th width="10%" class="center-align">Status</th>
                        <th width="10%" class="center-align">#</th>
                        <th width="10%" class="center-align">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->subject}}</td>
                            <td class="center-align">{{date('d/m/Y', strtotime($row->created_at))}}</td>
                            <td class="center-align">
                                <i class="material-icons {{$row->state ? 'green-text' : ''}}">visibility</i>
                            </td>
                            <td class="center-align">
                                <a href="{{route('admin.contact.view', $row->id)}}">
                                    <i class="material-icons blue-text">textsms</i>
                                </a>
                            </td>
                            <td class="center-align">
                                <a class="removeContact" href="#" data-id="{{$row->id}}">
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
            $('.removeContact').click(function () {
                removeContact($(this).attr('data-id'))
            })
        });

        function removeContact(contact_id) {
            $.ajax({
                url: '/contact/' + contact_id,
                method: 'POST',
                data: {
                    '_token': window.Laravel.csrfToken,
                },
                success: function (data) {
                    Materialize.toast('Contato excluido', 2000, null, function () {
                        location.reload();
                    });
                }
            });
        }
    </script>

@endsection