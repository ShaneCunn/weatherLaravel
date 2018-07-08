@extends('layouts.master')



@section('content')





    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post">
                    <h2 class="blog-post-title">Simple weather page</h2>
                    <p class="blog-post-meta">{{$time}} by <a href="#">Shane</a></p>

                    <p>Location page</p>

                    <P>Locations is: <strong>{{$ip}}</strong></P>

                </div><!-- /.blog-post -->



@endsection

