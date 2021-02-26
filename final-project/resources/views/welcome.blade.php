@extends('layouts.master')

@section('content')

    <div class="items-button">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/images/body.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Open sports carnival.</li>
                        <li>Registration totally free!!</li>
                        <li>High quality prize.</li>
                        <li>Three items for one person.</li>
                    </ul>
                    <a href="{{route('register')}}" class="btn btn-danger">Registration New <i class="fas fa-angle-double-right"></i></a>
                    <a href="{{route('login.show')}}" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

@endsection
