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

                </div><!-- /.blog-post -->



@endsection

