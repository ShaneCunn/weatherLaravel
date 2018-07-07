<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                {{--    @if (Session::get('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true"> You are logged in!</span></button>
                            {{ session('status') }}
                        </div>

                    @endif--}}


                    @if (session()->has('flash_notification.success')) <div class="alert alert-success">{!! session('flash_notification.success') !!}</div>
                    @endif
                    @if(isset($success) || Session::has('success') )
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> {{ isset($success) ? $info : Session::get('success') }}
                        </div>
                    @endif

                    @if(isset($error) || Session::has('error') )
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> {{ isset($error) ? $info : Session::get('error') }}
                        </div>
                    @endif

                    @if(isset($warning) || Session::has('warning') )
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> {{ isset($warning) ? $info : Session::get('warning') }}
                        </div>
                    @endif

                    @if(isset($info) || Session::has('info') )
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> {{ isset($info) ? $info : Session::get('info') }}
                        </div>
                    @endif


        </div>
    </div>
</div>