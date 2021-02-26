@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <li><a style="text-decoration: none;" href="{{route('logout')}}">Logout</a></li>
        </div>
    </div>
</div>

@endsection
