@extends('layouts.app')

@section('content')
<section class="banner banner-secondary" id="top" style="background-image: url(Frontend/img/banner-image-1-1920x300.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div>
                        <img src="{{url('/thumbImages/'.$car->image)}}" alt="" class="img-responsive wc-image">
                    </div>
                    <br>
                    <div class="row">
                        @foreach(explode(',', $car->images) as $image)
                        <div class="col-sm-4 col-xs-6">
                            <div class="form-group">
                                <img src="{{url('/car_gallry/'.$image)}}" alt="" class="img-responsive">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                        <h2><small><del> ${{$car->price}}</del></small><strong class="text-primary">${{$car->price}}</strong></h2>

                        <br>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Type</span>

                                    <strong class="pull-right">Used vehicle</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Car Type</span>

                                    <strong class="pull-right">{{$car->type}}</strong>
                                </div>
                            </li>

                            <!-- <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>

                                    <strong class="pull-right">Lorem ipsum dolor sit</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">First registration</span>

                                    <strong class="pull-right">05/2010</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Mileage</span>

                                    <strong class="pull-right">5000 km</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fuel</span>

                                    <strong class="pull-right">Diesel</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Engine size</span>

                                    <strong class="pull-right">1800 cc</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Power</span>

                                    <strong class="pull-right">85 hp</strong>
                                </div>
                            </li> -->


                            <!-- <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Gearbox</span>

                                    <strong class="pull-right">Manual</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Number of seats</span>

                                    <strong class="pull-right">4</strong>
                                </div>
                            </li> -->

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Doors</span>

                                    <strong class="pull-right">2/3</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Color</span>

                                    <strong class="pull-right">Black</strong>
                                </div>
                            </li>
                        </ul>

                        <div class="accordions">
                            <ul class="accordion">
                                <li>
                                    <a class="accordion-trigger">Vehicle Extras</a>

                                    <div class="accordion-content">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <p>ABS</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Leather seats</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Power Assisted Steering</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Electric heated seats</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>New HU and AU</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Xenon headlights</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="accordion-trigger">Vehicle Description</a>
                                    <div class="accordion-content">
                                        <p>- Colour coded bumpers<br>- Tinted glass<br>- Immobiliser<br>- Central locking - remote<br>- Passenger airbag<br>- Electric windows<br>- Rear head rests<br>- Radio<br>- CD player<br>- Ideal first car<br>- Warranty<br>- High level brake light<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </li>
                            </ul> <!-- / accordion -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection