<nav class="nav-extended  light-blue accent-4">
    <div class="nav-wrapper">
        <div class="container">

            <a href="#" class="brand-logo">AstonPro</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">


                {{-- UserRole Based Menu --}}
                @if(\Auth::user()->role == 1)
                <li><a href="{{route('courses.enrolled')}}"> My Courses</a></li>
                    <li><a href="{{route('result.index')}}">Result Analysis</a></li>

                @endif

                @if(\Auth::user()->role == 2)
                    <li><a href="{{route('dashboard.index')}}"> My dashboard </a> </li>
                    <li><a href="{{route('courses.index')}}"> My Courses</a></li>
                    <li><a href="{{route('post.index')}}">Post</a></li>
                @endif
                {{--/ UserRole Based Menu --}}


                <li><a href="badges.html">Messages</a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1">Hi, There</a>
                    <ul id="dropdown1" class="dropdown-content active" style="position: absolute; bottom:0;">
                        <li><a href="#">Settigns</a></li>
                        <li><a href="{{url('logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>


            <ul class="side-nav" id="mobile-demo">

                {{-- UserRole Based Menu --}}  
                @if(\Auth::user()->role == 2)
                <li><a href="{{route('courses.index')}}"> My Courses</a></li>
                @endif
                {{--/ UserRole Based Menu --}}

                <li><a href="badges.html">Messages</a></li>
                <li><a href="collapsible.html">Settings</a></li>
                <li><a href="collapsible.html">Logout</a></li>
            </ul>


        </div>
        <div class="row">
            <div class="container">
                <div class="col s12">
                    @yield('bread')
                </div>
            </div>
        </div>
    </div>

</nav>