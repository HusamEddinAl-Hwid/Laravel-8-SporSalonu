@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', $setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords', $setting->keywords)

@section('content')


    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 100px">
                    <div class="section-heading">
                        <h2>Newly added courses</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($daily as $rs)
                            <div class="col-lg-4">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>{{$rs->price}}₺</span>
                                        </div>
                                        <a href="{{route('payment',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>New </h6>
                                        </div>
                                        <a href="{{route('payment',['id'=>$rs->id])}}"><h4>{{$rs->title}}</h4></a>
                                        <p>{{$rs->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-now header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="height: 200px; text-align: center">
                    <h2 style="font-size: 48px;color: white">Build a healthy lifestyle!</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Popular Courses</h2>
                    </div>
                </div>
                    <div class="col-lg-12">
                        <div class="owl-courses-item owl-carousel">
                            @foreach($popular as $rs)
                            <div class="item">
                                <a href="{{route('payment',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="Course"></a>
                                <div class="down-content">
                                    <h4>{{$rs->title}}</h4>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-8">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <span>{{$rs->price}}₺</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>A Few Facts About Our Gym</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">94</div>
                                        <div class="count-title">Succeeded Students</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">126</div>
                                        <div class="count-title">Current Coaches</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">2345</div>
                                        <div class="count-title">New Students</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">32</div>
                                        <div class="count-title">Awards</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
