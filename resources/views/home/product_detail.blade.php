@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', $data->title)

@section('description'){{$data->description}}@endsection

@section('keywords', $data->keywords)

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Subscription Details</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>{{$data->price}}₺</span>
                                    </div>
                                    <img src="{{Storage::url($data->image)}}" alt="" style="max-height: 500px; object-fit: cover;">
                                </div>
                                <div class="down-content">
                                    <h4>{{$data->title}}</h4>
                                    <p>Recreio dos Bandeirantes, Rio de Janeiro - RJ, 22795-008, Brazil</p>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-12">
                                                <i class="fa fa-star" style="color: orange"></i>
                                                <i class="fa fa-star" style="color: orange"></i>
                                                <i class="fa fa-star" style="color: orange"></i>
                                                <i class="fa fa-star" style="color: orange"></i>
                                                <i class="fa fa-star" style="color: orange"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="description">{{$data->description}}</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Hours</h5>
                                                <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM - 15:00 PM</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>Location</h5>
                                                <p>Recreio dos Bandeirantes,
                                                    <br>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="book now">
                                                <h5>Book Now</h5>
                                                <p>010-020-0340<br>090-080-0760</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-button-red">
                                    <div><a href="{{route('payment',['id'=>$data->id])}}">Subscribe</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li class="scroll-to-section active"><a href="#gallery" style="color: white">Image Gallery</a></li>
                                    <li class="scroll-to-section active"><a href="#detail" style="color: white">Details</a></li>
                                    <li class="scroll-to-section active"><a href="#review" style="color: white">Reviews</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12" id="gallery">
                            <div class="row grid">
                                @foreach($datalist as $rs)
                                    <div class="col-lg-4 templatemo-item-col all img">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <img src="{{Storage::url($rs->image)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12" id="review">
                            <div class="row grid">
                                @foreach($datalist as $rs)
                                    <div class="col-lg-4 templatemo-item-col all img">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <img src="{{Storage::url($rs->image)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-12" id="detail" style="height: 600px">
                            <div class="row grid">
                                <div class="col-lg-12">
                                    <div class="item">
                                        <h3>Details</h3>
                                        <p>{!! $data->detail !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
