@extends('admin::layout')

<style>
    .dashboard .card-panel {
        height: 120px;
    }
</style>

@section('content')
    <div class="container dashboard">
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card-panel ">
                    <p class="center-align" style="margin-top: -20px">
                        <a href="{{route('admin.contact.index')}}"><i class="material-icons medium green-text" title="Caixa de Entrada">email</i></a>
                    </p>
                    <h4 class="center-align">20</h4>
                </div>
            </div>
        </div>
    </div>

@endsection