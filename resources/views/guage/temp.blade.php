@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Gauge weather page</h2>


                    <P> <div id="pop-div"></div>

                    </p>
                    <?= Lava::render('GaugeChart', 'Temps', 'pop-div') ?>



                    <P> <div id="temp-div"></div>

                    </p>
                    <?= Lava::render('GaugeChart', 'Air', 'temp-div') ?>

                    <P> <div id="speed-div"></div>

                    </p>
                    <?= Lava::render('GaugeChart', 'speed', 'speed-div') ?>

                    <P> <div id="gust-div"></div>

                    </p>
                    <?= Lava::render('GaugeChart', 'Gust', 'gust-div') ?>

                    <P> <div id="Humidty-div"></div>

                    </p>
                    <?= Lava::render('GaugeChart', 'Humidty', 'Humidty-div') ?>

                    {!! $chart->render() !!}

                </div><!-- /.blog-post -->



@endsection

