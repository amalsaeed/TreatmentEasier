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

        select {
            width: 250px !important;
            max-width: 500px;
        }

        textarea {
            width: 500px !important;
            max-width: 900px;
        }

        .form-signin {
            width: 100%;
            max-width: 1000px;
            padding: 15px;
            margin: auto;
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
            max-width: 250px;
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
        .datepicker {
            padding: 20px;
            border-radius: 5px;
        }

    </style>
@endsection

@section('content')
    <form class="form-signin" role="form" method="POST" action="{{ route('reservations.update', $reservation->id) }}" style="margin-top: 50px"  autocomplete="off">
        {{ csrf_field() }}

        @if (\Session::has('success'))
            <div class="alert alert-success" style="font-size: 14px">
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

        <h1 class="h3 mb-5 font-weight-normal">New Reservation</h1>
        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="d-flex flex-column">
                <div class="m-3">
                    <label for="inputName">Patient Name</label>
                    <input type="text" value="{{$profile->name}}" disabled id="inputName" class="form-control" placeholder="Name" required="" name="name">
                </div>
                <div class="m-3">
                    <label for="inputEmail">Email address</label>
                    <input type="email" value="{{auth()->user()->email}}" disabled id="inputEmail" class="form-control" placeholder="Email address" required="" name="email">
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="m-3">
                    <label for="inputProfile">Profile Number</label>
                    <input type="text" value="{{$profile->profile_number}}" disabled id="inputProfile" class="form-control" placeholder="Profile Number" required="" name="profile">
                </div>
                <div class="m-3">
                    <label for="inputMobile">Mobile Number</label>
                    <input type="text" value="{{$profile->mobile}}" disabled id="inputMobile" class="form-control" placeholder="Mobile Number" required="" name="mobile">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="m-3">
                <label for="clinic">Clinic Name</label>
                <select class="custom-select d-block" id="clinic" required="" name="clinic">
                    @foreach($clinics as $clinic)
                        <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-3">
                <label for="doctor">Doctor Name</label>
                <select class="custom-select d-block" id="doctor" required="" name="doctor">
                    @foreach($doctors as $doc)
                        <option value="{{$doc->id}}">{{$doc->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="m-3 date" data-provide="datepicker">
                <label for="date">Appointment Date</label>
                <input readonly type="text" class="form-control" name="date" data-today-byn="true" data-today-highlight="true" id="date" value="{{$reservation->date}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <div class="m-3">
                <label for="notes">Notes</label>
                <textarea type="text"  id="notes" class="form-control" placeholder="Notes" name="notes">{{$reservation->notes}}</textarea>
            </div>
        </div>

        <div class="mb-3 mt-5">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </div>
    </form>
@endsection
