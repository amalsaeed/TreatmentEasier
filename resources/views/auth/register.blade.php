@extends('layout.auth')

@section('content')
    <form class="form-signin" role="form" method="POST" action="{{ route('register') }}" >
        {{ csrf_field() }}
        <img class="mb-4" src="{{asset('dist/images/logo.png')}}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Name" required="" autofocus="" name="name" value="{{old('name')}}">
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email" value="{{old('email')}}">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif


        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password Confirmation" required="" name="password_confirmation">
        @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        @endif

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="mb-3">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </div>
        <p>Already have accout? </p><a class="mt-5 mb-3" href="{{route('login')}}">Login</a>
        <p class="mt-5 mb-3 text-muted">©2020</p>
    </form>
@endsection
