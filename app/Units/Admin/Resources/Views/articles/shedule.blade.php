@extends('admin::layout')
<style>
    .tabs .tab a {
        color: #008BD3 !important;
    }

    .tabs .indicator {
        background-color: #008BD3 !important;
    }
</style>
@section('content')
    <div class="container">

        <div class="row">
            <div class="col s12 m10 l10 offset-l1">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#agendar">Agendar Artigo</a></li>
                    <li class="tab col s3"><a href="#agendamento">Artigos Agendados</a></li>
                </ul>
                <br>
            </div>
            <div class="col s12 l10 offset-l1" id="agendar">
                @include('admin::articles._includes.agendar')
            </div>

            <div class="col s12 l10 offset-l1" id="agendamento">
                @include('admin::articles._includes.agendamento')
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.modal-trigger').leanModal({
                starting_top: '100%'
            });

            $('ul.tabs').tabs();

            $('.datepicker').pickadate({
                selectMonths: true,
                format: 'yyyy-mm-dd'
            });
        });
    </script>
@endsection