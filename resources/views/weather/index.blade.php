@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Simple weather page</h2>
                    <p class="blog-post-meta">{{$time}} by <a href="#">Shane</a></p>

                    <p>Test page for a simple weather page in laravel 5.6</p>
                    <p>
                        Location is: {{$loc}}
                        latitude is: {{$lat}}
                        longitude is: {{$long}}
                    </p>


                    <p> The current weather is: <strong>{{ $weather->currently->summary }}</strong></p>
                    <p> The current temperature is: <strong>{{ round(($weather->currently->temperature - 32) / 1.8, 0)}}
                            &#8451;</strong></p>
                    <p> The current wind speed is: <strong>{{ round(($weather->currently->windSpeed * 3.6), 0) }}
                            Kms</strong></p>
                    <p> The current wind direction is: <strong>{{ $direction}}</strong></p>

                    <p> The daily weather summary is: <strong>{{ $weather->daily->summary }}</strong></p>
                    {{-- @foreach($weather as $value)
                         <P>
                             {{ $weather->currently->summary }}

                         </P>
                     @endforeach--}}
                </div><!-- /.blog-post -->



@endsection

