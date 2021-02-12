<header>

    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Groovin</a>
            </div>

            <div class="">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>
                        <ul class="nav navbar-nav navbar-right">
{{--                            <li class="current"><a href="#intro">Home</a></li>--}}
                            @if(Auth::check())
                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                <li><a href="{{route('user.gallery')}}">Gallery</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                                <li><a href="{{route('user.cashOut')}}">Cashout</a></li>
                            @elseif(Auth::guard('admin')->check())
                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li><a href="{{route('admin.selling.show')}}">selling</a></li>
                                <li><a href="{{route('admin.logout')}}">Admin Logout</a></li>
                                <li><a href="{{route('admin.showCashouts')}}">Cashout</a></li>

                            @else
                                <li><a href="{{route('login.show')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                            @endif

                        </ul></nav>
                </div><!-- /.navbar-collapse -->
            </div>

        </div>
    </div>

</header>
