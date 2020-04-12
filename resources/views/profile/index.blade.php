@extends('layout.app')

@section('title', 'My Profile')

@section('styles')
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        label {
            margin-top: 5px;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            text-align: center;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>
@endsection

@section('content')
    <form class="form-signin" role="form" method="POST" action="{{ route('profile.update') }}" >
        {{ csrf_field() }}
        <img class="mb-4" src="{{asset('dist/images/user.png')}}" alt="" width="200" height="200">
        @if (\Session::has('success'))
            <div class="alert alert-success" style="font-size: 12px">
                {!! \Session::get('success') !!}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <h1 class="h3 mb-3 font-weight-normal">Profile</h1>
        <label for="inputName">Patient Name</label>
        <input type="text" value="{{$profile->name}}" disabled id="inputName" class="form-control" placeholder="Name" required="" name="name">
        <label for="inputEmail">Email address</label>
        <input type="email" value="{{auth()->user()->email}}" disabled id="inputEmail" class="form-control" placeholder="Email address" required="" name="email">
        <label for="inputProfile">Profile Number</label>
        <input type="text" value="{{$profile->profile_number}}" disabled id="inputProfile" class="form-control" placeholder="Profile Number" required="" name="profile">
        <label for="inputMobile">Mobile Number</label>
        <input type="text" value="{{$profile->mobile}}" id="inputMobile" class="form-control" placeholder="Mobile Number" required="" name="mobile">
        <div class="mb-3 mt-5">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </div>
    </form>
@endsection
