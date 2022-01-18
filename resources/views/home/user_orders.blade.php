@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'User Profile')


@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Your Subscriptions</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-10">
                    <div class="col-lg-12 align-self-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="contact" action="{{route('sendmessage')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>Subscriptions:</h2>
                                        </div>
                                        @include('home.message')
                                        @foreach($datalist as $rs)
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-user"></i> {{$rs->user->name}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-money"></i> Total Payment: {{$rs->total}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-check"></i> Subscription: {{$rs->product->title}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-calendar"></i> Start Date: {{$rs->start_date}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-calendar"></i> Expiry Date: {{$rs->finish_date}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-calendar"></i> Duration: {{$rs->months}} Months</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-paypal"></i> Payment Method: {{$rs->payment}} </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-cogs"></i> Status: {{$rs->status}} </p>
                                            </div>
                                            <div class="col-lg-12" style="margin-top: 20px">
                                                <p><strong>{{$rs->subject}}</strong></p>
                                                <p>{{$rs->review}}</p>
                                                <div class="main-button-red">
                                                    <div><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}">Show Product</a></div>
                                                </div>
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
        </div>
    </section>
@endsection
