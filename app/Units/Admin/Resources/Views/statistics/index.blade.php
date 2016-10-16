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
                        <h4 class="center-align"><strong>15</strong></h4>
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
                        <h4 class="center-align"><strong>25</strong></h4>
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
                        <h4 class="center-align"><strong>40</strong></h4>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l12">
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
//                            onclick: function (d, i) { console.log("onclick", d, i); },
//                            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
//                            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                        }
                    });

                    chart.load({
                        columns: [
                            ["Firefox", 50],
                            ["Google Chrome", 25],
                            ["Opera", 25],
                            ["Internet Explorer", 25],
                            ["Safari", 25],
                        ]
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