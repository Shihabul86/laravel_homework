@extends('layouts.master')

@section('content')

    <section style="padding-top: 60px;">
        <div class="container">
            @if(session('registerOk'))
                <p class="alert alert-success">{{session('registerOk')}}</p>
            @endif
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;">Login Form</h3>
                        </div>
                        @if(session('loginError'))
                            <li class="alert alert-success">{{session('loginError')}}</li>
                        @endif
                        @include('error.errors')
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" name="name" placeholder="Enter Your Username" class="form-control">
                                </div><!-- /.userName -->
                                <div class="form-group">
                                    <label for="email">Password</label>
                                    <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                                </div><!-- /.email -->
                                <button type="submit" class="btn btn-primary float-right">Login</button>
                            </form>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col-md- -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
