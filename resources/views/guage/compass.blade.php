@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Gauge weather page</h2>


                    <P>
                        <canvas id="windDirection"></canvas>

                        <canvas id="gauge"></canvas>

                    </p>


                </div><!-- /.blog-post -->

                <script src="{{asset('js/gauge.min.js')}}"></script>
                <script>


                    var gauge = new RadialGauge({
                        height: 206,
                        renderTo: 'gauge',
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



                    var gauge = new LinearGauge({
                        renderTo: 'canvas-id',
                        width: 400,
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
                        barBeginCircle: false
                    }).draw();


                </script>



@endsection

