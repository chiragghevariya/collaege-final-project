<!DOCTYPE html>
<html>
<head>
    <title>
       @yield('title')
    </title>
    <!-- Fixed -->

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/bootstrap.min.css')}}">

    <script type="text/javascript" src="{{asset('projectstylefile/js/bootstrap.min.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/post.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<!-- Fixed -->
@include('app.layout.header')

<div class="container">
        @yield('content')

</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vue-resource.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    })
</script>

<script type="text/javascript" src="{{asset('js/custom/assignments.js')}}"></script>
</body>
</html>