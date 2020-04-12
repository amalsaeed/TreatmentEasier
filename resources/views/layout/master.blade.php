<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
        body {
            padding-top: 70px;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
                <li class="nav-item ">
                    <a  href="/">Home</a>

                </li>
                <li class="nav-item ">

                    <a  href="{{route('about')}}">About Us</a>
                </li>

                <li class="nav-item ">

                    <a href="{{route('doctors')}}">Doctors</a>
                </li>


                @auth

                @if (\Auth::user()->user_type == 1)
                <li class="nav-item"><a  href="/doctor/dashboard">Dashboard</a></li>
                @else
                <li class="nav-item">
                    <a  href="{{route('profile')}}">Profile</a>
                </li>

                <li class="nav-item">
                    <a  href="{{route('reservations')}}">Reservations</a>
                </li>

                @endif
                <li class="nav-item"><a  href="/messages">Messages ( <span style="color:red;">
                            @include('messenger.unread-count') </span>)</a></li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Medical Service</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{route('dentistry')}}">Dentistry Clinic </a>
                        <a class="dropdown-item" href="{{route('Throat')}}">Ear And Throat Clinic</a>
                        <a class="dropdown-item" href="{{route('Internist')}}">Internist Clinic</a>
                        <a class="dropdown-item" href="{{route('Children')}}">Children Clinic</a>
                        <a class="dropdown-item" href="{{route('Orthopedic')}}">Orthopedic Clinic</a>
                        <a class="dropdown-item" href="{{route('Ophthalmology')}}">Ophthalmology Clinic</a>
                        <a class="dropdown-item" href="{{route('Heart')}}">Heart Clinic</a>
                        <a class="dropdown-item" href="{{route('Gynecology')}}">Obstetrics and Gynecology Clinic</a>
                    </div>
                </li>
            </ul>
            @auth
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{ url('/logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @else
            <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="{{route('login')}}">Login</a>
            @endauth



        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
