<!DOCTYPE html>

<html lang="en">

 
<head>

       @include('includes.head')

     
</head>

 
<body>
@include('includes.header')  


@include('includes.nav')     

@include('includes.message')
@yield('content')


@include('includes.sidebar')


@include('includes.footer')


@include('includes.scripts')

 
</body>

</html>