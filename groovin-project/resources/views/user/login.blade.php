@extends('layouts.master')

@section('content')
    <!-- section contact -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h3><span>Get in touch</span></h3>
                    </div>
                    <div class="sub-heading">
                        <p>
                            Lorem ipsum dolor sit amet, mutat paulo simul per no, assum fastidii vituperata eam no.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4><i class="icon-envelope"></i><strong>Login</strong></h4>
                    @if(session('registerOk'))
                        <p class="alert alert-success">{{session('registerOk')}}</p>
                    @endif
                    <!-- start contact form -->
                    <div class="cform" id="">
                    @if(session('loginError'))
                        <p class="alert alert-success">{{session('loginError')}}</p>
                    @endif
                        @include('error.errors')
                        <form action="" method="post" role="form" class="contactForm">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" name="username" class="form-control"  placeholder="Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"  placeholder="Password" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>

                            <button type="submit" class="btn btn-lg btn-theme pull-left">Login</button>
                        </form>

                    </div>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section contact -->
@endsection
