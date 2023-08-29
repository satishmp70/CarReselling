@extends('layouts.app')

@section('content')

<section class="featured-places">
    <div class="container">
        <div class="blue-button">
            <a href="{{ route('cars.create') }}">Add Reselling Car Detail </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>Featured Cars</span>
                    <h2>Lorem ipsum dolor sit amet ctetur.</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($allCar as $car)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="{{url('/thumbImages/'.$car->image)}}" alt="">
                        </div>
                        <div class="overlay-content">
                            <strong><i class="fa fa-dashboard"></i> {{$car->top_speed}}km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp; -->
                            <strong><i class="fa fa-cog"></i> {{$car->type}}</strong>
                        </div>
                    </div>
                    <div class="down-content">
                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                        <br>

                        <!-- <p>190 hp / Petrol / 2008 / Used vehicle</p> -->

                        <p><span><del><sup>$</sup>{{$car->price}} </del> <strong><sup>$</sup>{{$car->price}}</strong></span></p>

                        <div class="text-button">
                            <a href="{{route('car.detail',$car->id)}}">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection