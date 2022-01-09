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

                <div class="col-lg-10 align-self-center">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </section>
@endsection
