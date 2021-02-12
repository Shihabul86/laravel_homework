@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            @foreach($photos as $photo)
            <div class="col-lg-2">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">{{$photo->title}}</div>
                    <div class="panel-body">
                        <img style="width: 100%; height: 130px" src="{{asset('photos/'.$photo->image)}}" alt="">
                    </div>
                    <div class="panel-footer">
                        <p>Status: {{$photo->status}}</p>
                        @if($photo->status == 'approve')
                        <a href="{{route('user.gallery.photoStatus', [$photo->id, 'selling'])}}" class="btn btn-warning btn-sm">Request for sell</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            {{$photos->links()}}
        </div>

    </div>
@endsection
