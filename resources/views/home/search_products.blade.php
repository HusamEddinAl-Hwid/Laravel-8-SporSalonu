@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', $search . ' Product List')


@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our {{$search}} subscriptions!</h2>
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
                            <div class="row grid">
                                @foreach($datalist as $rs)
                                    <div class="col-lg-4 templatemo-item-col all soon">
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
            </div>
        </div>
    </section>
@endsection
