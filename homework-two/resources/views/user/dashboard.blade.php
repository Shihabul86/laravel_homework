@extends('layouts.userLayout')

@section('content')
    <div id="carousel-header" class="carousel slide" data-ride="carousel" data-interval="8000">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="camera-icon hidden-sm hidden-xs">
                <div class="circle">
                    <div class="hexagon">
                        <i class="fa  fa-camera"></i>
                    </div>
                </div>
            </div>

            <div class="item active">
                <img src="{{asset('assets/img/slide1.jpg')}}" alt="">
            </div>

            <div class="item">
                <img src="{{asset('assets/img/slide2.jpg')}}" alt="">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-header" role="button" data-slide="next">
            <img src="{{asset('assets/img/left.png')}}" alt="Previous">
        </a>
        <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
            <img src="{{asset('assets/img/right.png')}}" alt="Next">
        </a>
    </div>




    <div id="about" class="content-block content-block-cyan">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>The winter photographer</h1>
                    <p>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div id="projects" class="recent-projects">
        <div class="recent-projects-title">
            Recent Projects
        </div>

        <div class="recent-projects-content content-block-gray">
            <div id="owl-example" class="owl-carousel">
                <div>
                    <img src="{{asset('assets/img/recent1.jpg')}}" alt="">
                    <a href="#">Cartoon de loop</a>
                </div>
                <div>
                    <img src="{{asset('assets/img/recent2.jpg')}}" alt="">
                    <a href="#">In to the snow</a>
                </div>
                <div>
                    <img src="{{asset('assets/img/recent3.jpg')}}" alt="">
                    <a href="#">girl in sunset</a>
                </div>
                <div>
                    <img src="{{asset('assets/img/recent4.jpg')}}" alt="">
                    <a href="#">Tools</a>
                </div>
                <div>
                    <img src="{{asset('assets/img/recent5.jpg')}}" alt="">
                    <a href="#">Sunrise in west</a>
                </div>
                <div>
                    <img src="{{asset('assets/img/recent6.jpg')}}" alt="">
                    <a href="#">girl in sunset</a>
                </div>
                <div>
                    <img src="{{asset('assets/img/recent4.jpg')}}" alt="">
                    <a href="#">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div><!-- /.recent-projects -->



    <div id="blog" class="content-block content-block-gray">
        <div class="container">
            <header class="block-heading cleafix">
                <a href="#" class="btn btn-o btn-lg pull-right">View All</a>
                <h1>From the Blog</h1>
                <p>Keep up with the latest happenings.</p>
            </header>
            <section class="block-body">
                <div class="row">
                    <div class="col-sm-4 blog-post">
                        <img src="{{asset('assets/img/bike_water1-1000x600.jpg')}}" alt="Design Your Mind">
                        <a href="#"><h2>Design Your Mind</h2></a>
                        <div class="date">3 Nov, 2014</div>
                    </div>
                    <div class="col-sm-4 blog-post">
                        <img src="{{asset('assets/img/mac_glasses1-1000x600.jpg')}}" alt="Winter Is Comming">
                        <a href="#"><h2>Winter Is Comming</h2></a>
                        <div class="date">3 Nov, 2014</div>
                    </div>
                    <div class="col-sm-4 blog-post">
                        <img src="{{asset('assets/img/road-1000x600.jpg')}}" alt="The Illustration">
                        <a href="#"><h2>The Illustration</h2></a>
                        <div class="date">3 Nov, 2014</div>
                    </div>
                </div>
            </section>
        </div><!--/container-->
    </div><!-- /.content-block content-blog-gray -->
@endsection