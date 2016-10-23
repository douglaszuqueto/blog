@extends('admin::layout')

<style>
    .github .card-panel {
        height: 200px !important;
    }

    .repos .row {
        margin-bottom: 5px;
    }

    .card-title {
        margin-top: -20px;
        margin-bottom: -10px;
    }
</style>

@section('content')
    <div class="container github">
        <div class="row">
            <div class="col s12 m4 l4 offset-l1">
                <div class="card-panel" style="height: 200px">
                    <div class="row">
                        <div class="col l12 card-title">
                            <h5 class="center-align"><a href="{{$instagram['username']}}"
                                                        target="_blank">{{$instagram['username']}}</a></h5>
                        </div>
                    </div>
                    <div class="col l12 repos">
                        <div class="row">
                            <div class="col l3">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </div>
                            <div class="col l5">
                                <h6 class="left-align">Followed By</h6>
                            </div>
                            <div class="col l4">
                                <h6 class="left-align">{{$instagram['followed_by']}}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l3">
                                <i class="material-icons green-text">visibility</i>
                            </div>
                            <div class="col l5">
                                <h6 class="left-align">Follows</h6>
                            </div>
                            <div class="col l4">
                                <h6 class="left-align">{{$instagram['follows']}}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l3">
                                <i class="material-icons deep-orange-text">perm_identity</i>
                            </div>
                            <div class="col l5">
                                <h6 class="left-align">Media</h6>
                            </div>
                            <div class="col l4">
                                <h6 class="left-align">{{$instagram['media']}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection