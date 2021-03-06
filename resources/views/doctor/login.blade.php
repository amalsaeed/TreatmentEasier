@extends('layout.auth')

@section('content')
    <form class="form-signin" role="form" method="POST" action="{{ url('/doctor/login') }}" >
        {{ csrf_field() }}
        <img class="mb-4" src="{{asset('dist/images/logo.png')}}" alt="" width="100" height="100">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="mb-3">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
        <p class="mt-5 mb-3 text-muted">©2020</p>
    </form>
@endsection
