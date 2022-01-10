@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'References - ' . $setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our References</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div>
                <div class="col-lg-12">
                    {!! $setting->references !!}
                </div>
            </div>
        </div>
    </section>
@endsection
