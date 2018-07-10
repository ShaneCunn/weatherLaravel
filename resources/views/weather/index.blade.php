@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Simple weather page</h2>
                    <p class="blog-post-meta">{{$time}} by <a href="https://shanecunningham.me">Shane</a></p>

                    <p>Test page for a simple weather page in laravel 5.6</p>
                    <ul>
                        <li>Location is: <strong>{{$loc}}</strong></li>
                        <li>Latitude is: <strong>{{$lat}}</strong></li>
                        <li>Longitude is: <strong>{{$long}}</strong></li>
                    </ul>


                    <P>IP address is: <strong>{{$ip}}</strong></P>

                    <p> The current weather is: <strong>{{ $weather->currently->summary }}</strong></p>
                    <p> The current temperature is: <strong>{{ round(($weather->currently->temperature - 32) / 1.8, 0)}}
                            &#8451;</strong></p>
                    <p> The current wind speed is: <strong>{{ round(($weather->currently->windSpeed * 3.6), 0) }}
                            Kms</strong></p>
                    <p> The current wind direction is: <strong>{{ $direction}}</strong></p>
                    <ul>
                        @foreach($dailyS as $value)
                            <li> The daily weather summary for {{$value['day']}} is: <strong>{{$value['summary']}}</strong></li>

                        @endforeach


                    </ul>

                </div><!-- /.blog-post -->



@endsection

