@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Gauge weather page</h2>


                    <canvas id="windDirection"></canvas>


                    <div class="row">
                        <div class="col">
                            <canvas id="temperature"></canvas>
                            <canvas id="windSpeed"></canvas>
                        </div>
                        <div class="col">
                            <canvas id="windGust"></canvas>
                            <canvas id="humidity"></canvas>
                        </div>
                        <div class="col">
                            <canvas id="airPressure"></canvas>
                        </div>
                    </div>


                </div><!-- /.blog-post -->

                <script src="{{asset('js/gauge.min.js')}}"></script>
                <script>


                    var gauge = new RadialGauge({
                        height: 180,
                        renderTo: 'windDirection',
                        minValue: 0,
                        maxValue: 360,
                        majorTicks: [
                            "N",
                            "NE",
                            "E",
                            "SE",
                            "S",
                            "SW",
                            "W",
                            "NW",
                            "N"
                        ],
                        minorTicks: 22,
                        ticksAngle: 360,
                        startAngle: 180,
                        strokeTicks: false,
                        highlights: false,
                        colorPlate: "#a33",
                        colorMajorTicks: "#f5f5f5",
                        colorMinorTicks: "#ddd",
                        colorNumbers: "#ccc",
                        colorNeedle: "rgba(240, 128, 128, 1)",
                        colorNeedleEnd: "rgba(255, 160, 122, .9)",
                        valueBox: false,
                        valueTextShadow: false,
                        colorCircleInner: "#fff",
                        colorNeedleCircleOuter: "#ccc",
                        needleCircleSize: 15,
                        needleCircleOuter: false,
                        animationRule: "linear",
                        needleType: "line",
                        needleStart: 75,
                        needleEnd: 99,
                        needleWidth: 3,
                        borders: true,
                        borderInnerWidth: 0,
                        borderMiddleWidth: 0,
                        borderOuterWidth: 10,
                        colorBorderOuter: "#ccc",
                        colorBorderOuterEnd: "#ccc",
                        colorNeedleShadowDown: "#222",
                        borderShadowWidth: 0,
                        animationTarget: "plate",
                        animationDuration: 1500,
                        value: "{{  $degree }}",
                        animateOnInit: true

                    }).draw();




                    var gauge2 = new LinearGauge({
                        renderTo: 'temperature',
                        height: 150,
                        units: "°C",
                        title: "Temperature",
                        minValue: -50,
                        maxValue: 50,
                        majorTicks: [
                            -50,
                            -40,
                            -30,
                            -20,
                            -10,
                            0,
                            10,
                            20,
                            30,
                            40,
                            50
                        ],
                        minorTicks: 5,
                        strokeTicks: true,
                        ticksWidth: 15,
                        ticksWidthMinor: 7.5,
                        highlights: [
                            {
                                "from": -50,
                                "to": 0,
                                "color": "rgba(0,0, 255, .3)"
                            },
                            {
                                "from": 0,
                                "to": 50,
                                "color": "rgba(255, 0, 0, .3)"
                            }
                        ],
                        colorMajorTicks: "#ffe66a",
                        colorMinorTicks: "#ffe66a",
                        colorTitle: "#eee",
                        colorUnits: "#ccc",
                        colorNumbers: "#eee",
                        colorPlate: "#2465c0",
                        colorPlateEnd: "#327ac0",
                        borderShadowWidth: 0,
                        borders: false,
                        borderRadius: 10,
                        needleType: "arrow",
                        needleWidth: 3,
                        animationDuration: 1500,
                        animationRule: "linear",
                        colorNeedle: "#222",
                        colorNeedleEnd: "",
                        colorBarProgress: "#327ac0",
                        colorBar: "#f5f5f5",
                        barStroke: 0,
                        barWidth: 8,
                        barBeginCircle: false,
                        value: "{{ $temperature }}"
                    }).draw();

                    var gauge3 = new RadialGauge({
                        renderTo: 'windSpeed',
                        title: "Wind Speed",
                        width: 300,
                        height: 300,
                        units: "Km/h",
                        minValue: 0,
                        startAngle: 90,
                        ticksAngle: 180,
                        valueBox: false,
                        maxValue: 220,
                        majorTicks: [
                            "0",
                            "20",
                            "40",
                            "60",
                            "80",
                            "100",
                            "120",
                            "140",
                            "160",
                            "180",
                            "200",
                            "220"
                        ],
                        minorTicks: 2,
                        strokeTicks: true,
                        highlights: [

                            {"from": 0, "to": 50, "color": "rgba(0,255,0,.15)"},
                            {"from": 50, "to": 100, "color": "rgba(255,255,0,.15)"},
                            {"from": 100, "to": 150, "color": "rgba(255,30,0,.25)"},
                            {"from": 150, "to": 200, "color": "rgba(255,0,225,.25)"},
                            {"from": 200, "to": 220, "color": "rgba(0,0,255,.25)"}

                        ],
                        colorPlate: "#fff",
                        borderShadowWidth: 0,
                        borders: false,
                        needleType: "arrow",
                        needleWidth: 2,
                        needleCircleSize: 7,
                        needleCircleOuter: true,
                        needleCircleInner: false,
                        animationDuration: 1500,
                        animationRule: "linear",
                        value: "{{$windSpeed}}"
                    }).draw();

                    var gauge4 = new RadialGauge({
                        renderTo: 'windGust',
                        title: "Wind Gust",
                        width:300,

                        height: 300,
                        units: "Km/h",
                        minValue: 0,
                        startAngle: 90,
                        ticksAngle: 180,
                        valueBox: false,
                        maxValue: 220,
                        majorTicks: [
                            "0",
                            "20",
                            "40",
                            "60",
                            "80",
                            "100",
                            "120",
                            "140",
                            "160",
                            "180",
                            "200",
                            "220"
                        ],
                        minorTicks: 2,
                        strokeTicks: true,
                        highlights: [

                            {"from": 0, "to": 50, "color": "rgba(0,255,0,.15)"},
                            {"from": 50, "to": 100, "color": "rgba(255,255,0,.15)"},
                            {"from": 100, "to": 150, "color": "rgba(255,30,0,.25)"},
                            {"from": 150, "to": 200, "color": "rgba(255,0,225,.25)"},
                            {"from": 200, "to": 220, "color": "rgba(0,0,255,.25)"}

                        ],
                        colorPlate: "#fff",
                        borderShadowWidth: 0,
                        borders: false,
                        needleType: "arrow",
                        needleWidth: 2,
                        needleCircleSize: 7,
                        needleCircleOuter: true,
                        needleCircleInner: false,
                        animationDuration: 1500,
                        animationRule: "linear",
                        value: "{{$windGust}}"
                    }).draw();


                    var gauge5 = new RadialGauge({

                        renderTo: 'humidity',
                        value: "{{$humidity}}",
                        units: "Relative humidity[%]",
                        height: 300,
                    }).draw();

                    var gauge6 = new RadialGauge({

                        renderTo: 'airPressure',
                        value: "{{$airPressure}}",
                        units: "Barometer",
                        height: 300,
                        minValue: 950,
                        maxValue: 1060,

                        majorTicks: [
                            "950",
                            "960",
                            "970",
                            "980",
                            "990",
                            "1000",
                            "1010",
                            "1020",
                            "1030",
                            "1040",
                            "1050",
                            "1060"
                        ],
                    }).draw();


                </script>



@endsection

