@extends('admin::layout')

<style>
    .github .card-panel {
        height: 200px !important;
    }
</style>

@section('content')
    <div class="container github">
        <div class="row">
            <div class="col s12 m4 l6">
                <div class="card-panel ">
                    <div class="col l3">
                        <p class="" style="">
                            <i class="material-icons medium green-text" title="Visitantes de Hoje">thumb_up</i>
                        </p>
                    </div>
                    <div class="col l8">
                        <h6 class="center-align">TCC</h6>
                        <h4 class="center-align"><strong>{{$tcc['stars']}}</strong></h4>
                        <h5 class="center-align"><strong>Forks {{$tcc['forks']}}</strong></h5>
                        <h5 class="center-align"><strong>Subscribers {{$tcc['subscribers']}}</strong></h5>
                    </div>

                </div>
            </div>

            <div class="col s12 m4 l6">
                <div class="card-panel ">
                    <div class="col l3">
                        <p class="" style="">
                            <i class="material-icons medium green-text" title="Visitantes Mês">thumb_up</i>
                        </p>
                    </div>
                    <div class="col l8">
                        <h6 class="center-align">Blog</h6>
                        <h4 class="center-align"><strong>{{$blog['stars']}}</strong></h4>
                        <h5 class="center-align"><strong>Forks {{$blog['forks']}}</strong></h5>
                        <h5 class="center-align"><strong>Subscribers {{$blog['subscribers']}}</strong></h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection