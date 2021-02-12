@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 100px">
        @foreach($pendingPhotos as $photo)
        <div class="row" style="border: 1px solid black">
            <div class="col-md-4">
                <p>{{$photo->user->username}}</p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('photos/'.$photo->image)}}" style="width: 100px; height:100px;" alt="">
            </div>
            <div class="col-md-4">
                <a href="{{route('admin.image.approve',[$photo->id, 'approve'])}}" class="btn btn-success btn-sm">Approve</a>
                <a href="{{route('admin.image.approve',[$photo->id, 'decline'])}}" class="btn btn-danger btn-sm">Decline</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
