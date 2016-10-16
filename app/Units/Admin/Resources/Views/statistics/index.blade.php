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
                    <div class="col l3">
                        <p class="" style="">
                            <i class="material-icons medium green-text" title="Visitantes de Hoje">trending_up</i>
                        </p>
                    </div>
                    <div class="col l8">
                        <h6 class="center-align">Visitantes de Hoje</h6>
                        <h4 class="center-align"><strong>{{$visitors['day']}}</strong></h4>
                    </div>

                </div>
            </div>

            <div class="col s12 m4 l4">
                <div class="card-panel ">
                    <div class="col l3">
                        <p class="" style="">
                            <i class="material-icons medium orange-text" title="Visitantes Mês">trending_up</i>
                        </p>
                    </div>
                    <div class="col l8">
                        <h6 class="center-align">Visitantes no Mês</h6>
                        <h4 class="center-align"><strong>{{$visitors['month']}}</strong></h4>
                    </div>

                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card-panel ">
                    <div class="col l3">
                        <p class="" style="">
                            <i class="material-icons medium red-text" title="Visitantes Totais">trending_up</i>
                        </p>
                    </div>
                    <div class="col l8">
                        <h6 class="center-align">Visitantes Totais</h6>
                        <h4 class="center-align"><strong>{{$visitors['all']}}</strong></h4>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l12">
                <div id='chart'></div>

                <script>

                    var chart = c3.generate({
                        data: {
                            // iris data from R
                            columns: [
//                                ['data1', 30],
//                                ['data2', 120],
                            ],
                            type: 'pie',
                            onclick: function (d, i) {
                                console.log("onclick", d.value);
                            },
//                            onmouseover: function (d, i) { console.log("onclick", d.value); },
//                            onmouseout: function (d, i) { console.log("onclick", d.value); },
                        },
                        pie: {
                            label: {
                                format: function (value, ratio, id) {
                                    return d3.format('')(value);
                                }
                            }
                        }
                    });

                    var data = {!! $browsers !!};
                    var chartjsData = [];

                    data.forEach(function (element, index, array) {
                        chartjsData.push([
                            element.browser,
                            element.sessions
                        ]);
                    });
                    chart.load({
                        columns: chartjsData,
                    });

                    //                    setTimeout(function () {
                    //                        chart.unload({
                    //                            ids: 'data1'
                    //                        });
                    //                        chart.unload({
                    //                            ids: 'data2'
                    //                        });
                    //                    }, 2500);

                </script>
            </div>
        </div>
    </div>

@endsection