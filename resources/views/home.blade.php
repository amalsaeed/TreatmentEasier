@extends('layout.app')


@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 700px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{asset('dist/images/90.jpg')}}" style="height: 700px;width: 100%">
            </div>
            <div class="carousel-item active carousel-item-left">
                <img src="{{asset('dist/images/722.jpg')}}" style="height: 700px;width: 100%">
            </div>
            <div class="carousel-item carousel-item-next carousel-item-left">
                <img src="{{asset('dist/images/00.jpg')}}" style="height: 700px;width: 100%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <img src="{{asset('dist/images/fa.png')}}" width="100" height="100">
            <img src="{{asset('dist/images/tw.png')}}" width="100" height="100">
            <img src="{{asset('dist/images/ins.png')}}" width="100" height="100">
            <img src="{{asset('dist/images/wh.png')}}" width="100" height="100">
            <img src="{{asset('dist/images/sc.png')}}" width="100" height="100">
        </div>
   </div>
@endsection



