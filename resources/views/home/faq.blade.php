@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'FAQ - ' . $setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>FAQ</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordions">
                        @foreach($datalist as $rs)
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>{{$rs->question}}</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body" style="margin-top: -30px;">
                                <div class="content">
                                    <p><br>{!! $rs->answer !!}</p>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
