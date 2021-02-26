@extends('layouts.master')

@section('content')

    <section style="padding-top: 60px;">
        <div class="container">
            <form action="{{route('register.save')}}" method="POST">
                @csrf
                <h1>Player Registration Form</h1>
                <p>Register to the football team below</p>
                @include('error.errors')
                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Player Name: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Age: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <input type="text" name="age" placeholder="Age" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="height" placeholder="Height" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="weight" placeholder="Weight" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <select class="custom-select mr-sm-2" name="health">
                            <option selected>Health Condition</option>
                            <option value="Highly Good">Highly Good</option>
                            <option value="Good">Good</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Address: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="text" name="address" placeholder="Address" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Email & Phone: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Ex: myname@example.com" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" placeholder="Phone Number(ex: 01x-xxxxxxxx)" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Player Team Group: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <select class="custom-select mr-sm-2" name="group">
                            <option selected>Select Age</option>
                            <option value="Age: 14-18">Age: 14-18</option>
                            <option value="Age: 19-30">Age: 19-30</option>
                            <option value="Age: 31-40">Age: 31-40</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Playing Position: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <select class="custom-select mr-sm-2" name="playPosition">
                            <option selected>Select Position</option>
                            <option value="Offense">Offense</option>
                            <option value="Defense">Defense</option>
                            <option value="Keeper">Keeper</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 style="padding-top: 5px; padding-bottom: 5px">Password: </h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="password" name="password" placeholder="Create Password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>

                <div style="padding-bottom: 20px;" class="row">
                    <div class="col-md-12 ">
                        <input style="margin-top: 20px;" type="submit" value="Submit" name="submit" class="btn btn-danger float-right">
                    </div>
                </div>

            </form><!-- /.form -->
        </div><!-- /.container -->
    </section>

@endsection
