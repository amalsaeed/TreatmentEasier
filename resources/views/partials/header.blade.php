<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a href="/">
        <img src="{{asset('dist/images/logo.png')}}" alt="" width="80" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>

            </li>
            <li class="nav-item active">

                <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>

            <a class="nav-link" href="{{route('doctors')}}">Doctors</a>

             @auth

             @if (\Auth::user()->user_type == 1)
             <li class="nav-item"><a class="nav-link" href="/doctor/dashboard">Dashboard</a></li>
             @else
     <li class="nav-item">
        <a class="nav-link" href="{{route('profile')}}">Profile</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('reservations')}}">Reservations</a>
    </li>

             @endif
<li class="nav-item"><a class="nav-link" href="/messages">Messages ( <span style="color:red;">
                    @include('messenger.unread-count') </span>)</a></li>
        @endauth



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medical Service</a>
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
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="{{route('login')}}">Login</a>
        @endauth
    </div>
</nav>
