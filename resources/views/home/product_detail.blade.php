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
                                        <span>{{$data->price}}₺ (Per Month)</span>
                                    </div>
                                    <img src="{{Storage::url($data->image)}}" alt="" style="max-height: 500px; object-fit: cover;">
                                </div>
                                <div class="down-content">
                                    <h4>{{$data->title}} ({{$data->months}} Months duration)</h4>
                                    <p>{{$data->price}}₺ (Per Month)</p>
                                    <div class="info">
                                        @php
                                            $avgrev = \App\Http\Controllers\HomeController::avgrev($data->id);
                                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                                        @endphp
                                        <div class="row">
                                            <div class="col-12">
                                                <i class="fa fa-star" @if($avgrev>=1) style="color: orange" @endif></i>
                                                <i class="fa fa-star" @if($avgrev>=2) style="color: orange" @endif></i>
                                                <i class="fa fa-star" @if($avgrev>=3) style="color: orange" @endif></i>
                                                <i class="fa fa-star" @if($avgrev>=4) style="color: orange" @endif></i>
                                                <i class="fa fa-star" @if($avgrev>=5) style="color: orange" @endif></i>
                                            </div>
                                            <div>
                                                <a href="#rev">{{ $countreview }} Reviews {{$avgrev}}</a>
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
                                            <div><a href="{{route('user_order_add',['id'=>$data->id])}}">Subscribe</a></div>
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
                                    <li class="scroll-to-section"><a href="#gallery" style="color: black">Image Gallery</a></li>
                                    <li class="scroll-to-section"><a href="#detail" style="color: black">Details</a></li>
                                    <li class="scroll-to-section"><a href="#rev" style="color: black">Reviews ({{$countreview}})</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="gallery"></div>
                        <div class="col-lg-12">
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
    <div id="detail"></div>
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-12" style="height: 600px">
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
    <div id="rev"></div>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            @livewire('review', ['id' => $data->id])
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Reviews:</h2>
                                    </div>
                                    @foreach($reviews as $rs)
                                        <div class="col-lg-4">
                                            <p><i class="fa fa-user"></i> {{$rs->user->name}}</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p><i class="fa fa-clock-o"></i> {{$rs->created_at}}</p>
                                        </div>
                                        <div class="col-lg-12">
                                            <i class="fa fa-star" @if($rs->rate>=1) style="color: orange" @endif></i>
                                            <i class="fa fa-star" @if($rs->rate>=2) style="color: orange" @endif></i>
                                            <i class="fa fa-star" @if($rs->rate>=3) style="color: orange" @endif></i>
                                            <i class="fa fa-star" @if($rs->rate>=4) style="color: orange" @endif></i>
                                            <i class="fa fa-star" @if($rs->rate>=5) style="color: orange" @endif></i>
                                        </div>
                                        <div class="col-lg-12">
                                            <p><strong>{{$rs->subject}}</strong></p>
                                            <p>{{$rs->review}}</p>
                                            <h2></h2>
                                        </div>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
