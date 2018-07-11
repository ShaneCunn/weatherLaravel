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
        



    </div>
@include('includes.weather.scriptsfooter')
@include('includes.weather.footer')