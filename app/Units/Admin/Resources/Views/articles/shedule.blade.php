@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Agendar Artigo</h5>

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th class="center-align">Agendamento</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itens as $row)
                        <tr>
                            <td>{{$row->title}}</td>
                            <td width="20%" class="center-align ">
                                <a class="modal-trigger" href="#modalShedule-{{$row->id}}">
                                    <i class="material-icons red-text">query_builder</i>
                                </a>
                            </td>
                            <div id="modalShedule-{{$row->id}}" class="modal">
                                <div class="modal-content">
                                    <h4>Agendamento de Artigo - {{$row->id}}</h4>
                                    <form class="col l12" role="form" method="POST"
                                          action="{{ route('admin.articles.shedule') }}">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="input-field col l8 offset-l2">
                                                <label for="datepicker">Data</label>
                                                <input type="text" class="datepicker" name="datepicker" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="waves-effect waves-light btn right">
                                        <i class="material-icons right">cloud</i>Cadastrar
                                    </button>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.modal-trigger').leanModal({
                starting_top: '100%'
            });

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
            });
        });
    </script>
@endsection