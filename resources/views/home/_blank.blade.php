@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'About Us')

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
@endsection
