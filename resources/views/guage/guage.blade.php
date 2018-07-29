@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Gauge weather page</h2>


                    <P> <div id="pop-div"></div>

                    </p>
                    <?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>

                </div><!-- /.blog-post -->



@endsection

