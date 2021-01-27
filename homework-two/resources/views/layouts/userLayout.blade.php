<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHOTOGRAPHER - Responsive html Bootstrap 3 based theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.carousel.css')}}">

    <!-- Default Theme -->
    <link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.theme.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <script src="{{asset('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    @stack('css')
</head>


<body>
@include('user.partials.header')

<div class="body">
    @yield('content')
</div>

@include('user.partials.footer')

<script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery-1.11.0.min.js')}}"><\/script>')</script>

<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<!-- Include js plugin -->
<script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

</body>
@stack('js')
</html>

