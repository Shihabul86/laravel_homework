@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">

            <div class="col-md-6 col-md-offset-3" style="margin-top: 40px">
                @if(session('uploadSuccess'))
                    <li class="alert alert-success">{{session('uploadSuccess')}}</li>
                @endif
                @include('error.errors')
                <form class="form-group" action="{{route('user.upload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="text" name="title" placeholder="Title"><br>
                    <input class="form-control" type="text" name="description" placeholder="Description"><br>
                    <input class="form-control" type="file" name="image" placeholder="Image Upload"><br>
                    <input class="btn btn-success" type="submit" name="submit" value="Upload">
                </form>
            </div>

        </div>
    </div>
@endsection