@extends('layout')

@section('page.content')
    <form action="{{ route('add-new-node') }}" method="POST">
        <div class="mb-5 row">
            <div class="col-3">
                <label for="name" class="form-label">Node Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter node name..." value="{{ $node->name }}">
            </div>
            <div class="col-3">
                <label for="measurement_time" class="form-label">Node Measurement Time</label>
                <input type="number" name="measurement_time" class="form-control" id="measurement_time" placeholder="Enter node measurement_time..." value="{{ $node->measurement_time }}">
            </div>
            <div class="col-3">
                <label for="" class="form-label">Status</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status_active" checked value="1">
                        <label class="form-check-label" for="status_active">
                            Active
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status_inactive" value="2">
                        <label class="form-check-label" for="status_inactive">
                            Inactive
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <label for="">Update Node Info</label>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        @csrf
    </form>

    <div class="mb-5">
        <h2>Chart Water Level</h2>
        <div id="chart-water-level"></div>
    </div>

    <div lass="mb-5">
        <h2>Chart Water Flow</h2>
        <div id="chart-water-flow"></div>
    </div>

    <div lass="mb-5">
        <h2>Chart Rainfall Level</h2>
        <div id="chart-rainfall"></div>
    </div>

    <div>
        <h2>Chart Wind Speed</h2>
        <div id="chart-wind-speed"></div>
    </div>
@endsection

@section('page.js')
<script>
    var listWaterLevel = @json($listWaterLevel);
    var listWaterFlow = @json($listWaterFlow);
    var listRainfall = @json($listRainfall);
    var listWindSpeed = @json($listWindSpeed);

    var chartWarterLevel = new Highcharts.Chart({
        chart:{
            renderTo : 'chart-water-level',
            height: 300
        },
        title: { text: '' },
        series: [{
            showInLegend: false,
            data: []
        }],
        plotOptions: {
            line: { animation: false,
            dataLabels: { enabled: true }
            },
            series: { color: '#059e8a' }
        },
        xAxis: { type: 'datetime',
            dateTimeLabelFormats: { second: '%H:%M:%S' }
        },
        yAxis: {
            title: { text: 'PPM' }
        },
        credits: { enabled: false }
    });

    var chartWarterFlow = new Highcharts.Chart({
        chart:{
            renderTo : 'chart-water-flow',
            height: 300
        },
        title: { text: '' },
        series: [{
            showInLegend: false,
            data: []
        }],
        plotOptions: {
            line: { animation: false,
            dataLabels: { enabled: true }
            },
            series: { color: '#059e8a' }
        },
        xAxis: { type: 'datetime',
            dateTimeLabelFormats: { second: '%H:%M:%S' }
        },
        yAxis: {
            title: { text: 'PPM' }
        },
        credits: { enabled: false }
    });

    var chartRainfall = new Highcharts.Chart({
        chart:{
            renderTo : 'chart-rainfall',
            height: 300
        },
        title: { text: '' },
        series: [{
            showInLegend: false,
            data: []
        }],
        plotOptions: {
            line: { animation: false,
            dataLabels: { enabled: true }
            },
            series: { color: '#059e8a' }
        },
        xAxis: { type: 'datetime',
            dateTimeLabelFormats: { second: '%H:%M:%S' }
        },
        yAxis: {
            title: { text: 'PPM' }
        },
        credits: { enabled: false }
    });

    var chartWindSpeed = new Highcharts.Chart({
        chart:{
            renderTo : 'chart-wind-speed',
            height: 300
        },
        title: { text: '' },
        series: [{
            showInLegend: false,
            data: []
        }],
        plotOptions: {
            line: { animation: false,
            dataLabels: { enabled: true }
            },
            series: { color: '#059e8a' }
        },
        xAxis: { type: 'datetime',
            dateTimeLabelFormats: { second: '%H:%M:%S' }
        },
        yAxis: {
            title: { text: 'PPM' }
        },
        credits: { enabled: false }
    });

    function getInitDataWaterLevel() {
        for (i = 0; i < listWaterLevel.length; i++) {
            var x = (new Date()).getTime() + 7*60*60*1000,
                y = listWaterLevel[i]?.value

            if(chartWarterLevel.series[0].data.length > 40) {
                chartWarterLevel.series[0].addPoint([x, y], true, true, true);
            } else {
                chartWarterLevel.series[0].addPoint([x, y], true, false, true);
            }
        }
    }

    function getInitDataWaterFlow() {
        for (i = 0; i < listWaterFlow.length; i++) {
            var x = (new Date()).getTime() + 7*60*60*1000,
                y = listWaterFlow[i]?.value

            if(chartWarterFlow.series[0].data.length > 40) {
                chartWarterFlow.series[0].addPoint([x, y], true, true, true);
            } else {
                chartWarterFlow.series[0].addPoint([x, y], true, false, true);
            }
        }
    }

    function getInitDataRainfall() {
        for (i = 0; i < listRainfall.length; i++) {
            var x = (new Date()).getTime() + 7*60*60*1000,
                y = listRainfall[i]?.value

            if(chartRainfall.series[0].data.length > 40) {
                chartRainfall.series[0].addPoint([x, y], true, true, true);
            } else {
                chartRainfall.series[0].addPoint([x, y], true, false, true);
            }
        }
    }

    function getInitDataWindSpeed() {
        for (i = 0; i < listWindSpeed.length; i++) {
            var x = (new Date()).getTime() + 7*60*60*1000,
                y = listWindSpeed[i]?.value

            if(chartWindSpeed.series[0].data.length > 40) {
                chartWindSpeed.series[0].addPoint([x, y], true, true, true);
            } else {
                chartWindSpeed.series[0].addPoint([x, y], true, false, true);
            }
        }
    }

    getInitDataWaterLevel();
    getInitDataWaterFlow();
    getInitDataRainfall();
    getInitDataWindSpeed();
</script>
@endsection
