
<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--    <link rel="icon" href="/public/favicon.ico">--}}

    <title>@yield('title','Pleiax Luxury | Home')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/css/custom.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="bk-black">
    <div class="container-fluid bk-black">
        <div class="row">
            <nav class="navbar navbar-expand navbar-dark bk-black">
                <div class="container-fluid">
                    <a class="navbar-brand flex-center" href="{{ url('/') }}">
                        <img src="{{ url('/imgs/pl-logo.jpg') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
                        <span class="golden ms-2">Pleiax Luxury</span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: flex-end">
                        <ul class="navbar-nav">
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link active" href="#">Home</a>--}}
                            {{--                        </li>--}}
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route("login")}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route("register")}}">Register</a>
                                </li>
                                @endguest
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle golden" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user-circle-o"></i>
                                                                            <span class="d-sm-none"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                            <li><a class="dropdown-item" href="#">My Rentals List</a></li>
                                        {{--                            <li><hr class="dropdown-divider"></li>--}}
                                    </ul>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();
                        ">Log Out</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                                @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        {{$slot ?? ''}}
    </div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@section('footer')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{url('/js/bootstrap.bundle.min.js')}}" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
@show
</body>
</html>
