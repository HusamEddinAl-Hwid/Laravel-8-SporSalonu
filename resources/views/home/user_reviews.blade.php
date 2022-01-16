@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'User Profile')

@section('description'){{$setting->description}}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Your Profile</h2>
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
                                            <h2>Reviews:</h2>
                                        </div>
                                        @include('home.message')
                                        @foreach($datalist as $rs)
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-user"></i> {{$rs->user->name}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-clock-o"></i> {{$rs->created_at}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><i class="fa fa-check"></i> {{$rs->product->title}}</p>
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
                                                <div class="main-button-red">
                                                    <div><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</a></div>
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
