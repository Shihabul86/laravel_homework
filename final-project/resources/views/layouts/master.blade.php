<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sports Carnival</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--FontAwesome CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @stack('css')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')


<!-- jQuery, Popper.js, and Bootstrap JS-->
<script src="{{asset('assets/js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}" ></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--custom js-->
<script src="{{asset('assets/js/custom.js')}}"></script>


@stack('js')
</body>
</html>
