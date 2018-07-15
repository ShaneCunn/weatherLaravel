<div class="row">
    <div class="weather-evolution daily">
        <div class="we-title">Evolution</div>
        <div class="chart-container">
            <div class="chart-title">Daily Forecast Evolution (°C)</div>
            <div class="ct-chart">
                <script>
                    new Chartist.Line('.ct-chart', {
                        labels: ['Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',],
                        series: [
                            ['22', '20', '20', '20', '18',],
                            ['17', '14', '12', '12', '15',]
                        ]
                    }, {
                        axisY: {
                            labelInterpolationFnc: function (value) {
                                return (value) + '°';
                            }
                        },
                        fullWidth: true,
                        lineSmooth: false,
                        chartPadding: {
                            right: 50,
                            top: 20
                        },
                        height: 200
                    });
                </script>
            </div>
            <div class="chart-legends">
                <div class="chart-legend">
                    <div class="legend-color legend-min"></div>
                    <div class="legend-name">Lowest temperature</div>
                </div>
                <div class="chart-legend">
                    <div class="legend-color legend-max"></div>
                    <div class="legend-name">Highest temperature</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="weather-info">
        <div class="wi-title">Info</div>
        <div class="wi-content">
            <div class="wi-item">
                <div class="wi-icon">
                    <img src="{{asset('images/icons/sunrise.svg')}}" class="wf-icon">
                </div>
                <div class="wi-description">
                    <div class="wi-name">
                        Sunrise
                    </div>
                    <div class="wi-value">
                        04:23
                    </div>
                </div>
            </div>
            <div class="wi-item">
                <div class="wi-icon">
                    <img src="{{asset('images/icons/sunset.svg')}}" class="wf-icon">
                </div>
                <div class="wi-description">
                    <div class="wi-name">
                        Sunset
                    </div>
                    <div class="wi-value">
                        20:59
                    </div>
                </div>
            </div>
            <div class="wi-item">
                <div class="wi-icon">
                    <img src="{{asset('images/icons/latitude.svg')}}" class="wf-icon">
                </div>
                <div class="wi-description">
                    <div class="wi-name">
                        Latitude
                    </div>
                    <div class="wi-value">
                         {{$lat}}
                    </div>
                </div>
            </div>
            <div class="wi-item">
                <div class="wi-icon">
                    <img src="{{asset('images/icons/longitude.svg')}}" class="wf-icon">
                </div>
                <div class="wi-description">
                    <div class="wi-name">
                        Longitude
                    </div>
                    <div class="wi-value">
                       {{ $long }}
                    </div>
                </div>
            </div>
        </div>
        <div class="timezone">Timezone: GMT+00:00</div>
    </div>
</div>

</div>