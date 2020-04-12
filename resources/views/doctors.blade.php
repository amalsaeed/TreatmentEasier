@extends('layout.app')


@section('content')



<div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">

        </div>
    </div>
</div><!-- End -->


<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-dagger" role="alert">
       <h3 style="color:red;text-align:center">{{ Session::get('success') }}</h3>
    </div>
    @endif
    <div class="row text-center">

@foreach ($doctors as $doctor)
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4">
                <img src="http://placehold.it/50/55C1E7/fff&text={{ $doctor->name[0] }}" alt="{{ $doctor->name[0] }}"
                   width="100"
                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">


                <h5 class="mb-0">{{ $doctor->name}}</h5><span class="small text-uppercase text-muted">
                  Clinic: {{ $doctor->clinic->name }}
                </span>
                <ul class="social mb-0 list-inline mt-3">

                    <li class="list-inline-item"><a href="{{route('messages.create',$doctor->user_id)}}" class="social-link">Send a Message</a>
                    </li>
                    <li class="list-inline-item"><a href="{{route('reservations.create')}}" class="social-link">Make a Reservation</a></li>
                </ul>
            </div>
        </div><!-- End -->
@endforeach

    </div>
</div>




@endsection



