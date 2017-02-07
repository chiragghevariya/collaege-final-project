<!DOCTYPE html>
<html>
<head>

<title>@yield('title')</title>


    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('projectstylefile/js/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('projectstylefile/js/bootstrap.min.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/post.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <style type="text/css">

        body{

            width: 100%;
            height: 100%;
        }
        nav ul li a{

            color: #FF5722;
        }

        nav a{
            color: #FF5722;
        }

    </style>


</head>
<body>



        {{--<nav class="navbar" style="background:#673AB7;height:5em">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="navbar-header">--}}
                    {{--<a class="navbar-brand for-color" href="#" style="margin-top:10px ">WebSiteName</a>--}}
                {{--</div>--}}
                {{--<ul class="nav navbar-nav for-color" style="margin-top:10px">--}}
                    {{--<li class="active"><a href="#">Home</a></li>--}}
                    {{--<li><a href="#">Page 1</a></li>--}}
                    {{--<li><a href="#">Page 2</a></li>--}}
                {{--</ul>--}}
                {{--<ul class="nav navbar-nav navbar-right for-color" style="margin-top:10px ">--}}
                    {{--<li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
                    {{--<li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}

    {{--<div class="container">--}}


        {{--<nav class="navbar" style="background:#673AB7;height:5em">--}}

            {{--<div class="container">--}}

                {{--<div class="navbar-header">--}}

                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}

                        {{--<span class="sr-only">Toggle navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}

                    {{--</button>--}}

                    {{--<a class="navbar-brand for-color" href="#" style="margin-top:10px ">WebSiteName</a>--}}

                {{--</div>--}}

                {{--<div id="navbar" class="navbar-collapse collapse">--}}

                    {{--<ul class="nav navbar-nav for-color" style="margin-top:10px">--}}
                        {{--<li class="active"><a href="#">Home</a></li>--}}
                        {{--<li><a href="#">Page 1</a></li>--}}
                        {{--<li><a href="#">Page 2</a></li>--}}
                    {{--</ul>--}}


                    {{--<ul class="nav navbar-nav navbar-right for-color" style="margin-top:10px ">--}}
                        {{--<li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
                        {{--<li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
                    {{--</ul>--}}
                {{--</div><!--/.nav-collapse -->--}}

            {{--</div>--}}

        {{--</nav>--}}



        <nav class="navbar" style="background:#673AB7;height:5em">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="margin-top: 11px;">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav for-color" style="margin-top:10px">

                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right for-color" style="margin-top:10px ">
                        <li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>






            @yield('content')





</body>
</html>
