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
                                <form class="col l12" role="form" method="POST"
                                      action="{{ route('admin.articles.shedule')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="article_id" value="{{$row->id}}">
                                    <div class="modal-content">
                                        <h5>Agendamento - {{$row->title}}</h5>
                                        <div class="row">
                                            <div class="input-field col l8 offset-l2">
                                                <label for="datepicker">Data</label>
                                                <input type="text" class="datepicker" name="dt_shedule" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="waves-effect waves-light btn right">
                                            <i class="material-icons right">cloud</i>Agendar
                                        </button>
                                        <br>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="divider offset-l1"></div>

        <h5>Artigos Agendados</h5>

        <div class="row">
            <div class="col l10 offset-l1">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="80%">Titulo</th>
                        <th width="20%">Data Agendamento</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shedules as $row)
                        <tr>
                            <td width="80%">{{$row['article']}}</td>
                            <td width="20%" class="center-align">{{$row['dt_shedule']}}</td>

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
                selectMonths: true,
                format: 'yyyy-mm-dd'
            });
        });
    </script>
@endsection