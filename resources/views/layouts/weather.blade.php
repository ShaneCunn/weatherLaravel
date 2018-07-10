@include('includes.weather.head')
<body>
@include('includes.weather.scripts')
<h2>{{ round(($weather->currently->temperature - 32) / 1.8, 0)}}<span>°</span></h2>
<h4>{{$loc}}</h4>
<h6>{{$weather->currently->summary}}</h6>
</div>
<div class="w3layouts-slider">
    <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach($dailyS as $value)

            <div class="item agile-item">
                <canvas id="{{$value['icon']}}" width="40" height="40"></canvas>
                <h6>{{$value['day']}}</h6>
            </div>
        @endforeach
        


        {{--

                <div class="item agile-item">
                    <canvas id="sleet" width="40" height="40"></canvas>
                    <h6>Thr</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="rain" width="40" height="40"></canvas>
                    <h6>Fri</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="partly-cloudy-day" width="40" height="40"></canvas>
                    <h6>Sat</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="cloudy" width="40" height="40"></canvas>
                    <h6>Sun</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="clear-night" width="40" height="40"></canvas>
                    <h6>Mon</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="clear-day" width="40" height="40"></canvas>
                    <h6>Tue</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="partly-cloudy-night" width="40" height="40"></canvas>
                    <h6>Wed</h6>
                </div>--}}
    </div>

@include('includes.weather.footer')