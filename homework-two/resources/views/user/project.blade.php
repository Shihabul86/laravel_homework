@extends('layouts.userLayout')

@section('content')
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

@endsection