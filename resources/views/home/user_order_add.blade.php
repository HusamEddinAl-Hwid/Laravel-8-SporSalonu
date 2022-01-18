@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'Subscription Payment')


@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Subscription Payment</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('home.message')
                            <form id="contact" action="{{route('user_order_store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Your Subscription Details</h2>
                                    </div>
                                    <input name="product_id" type="hidden" id="product_id" value="{{$data->id}}" readonly>
                                    <p><strong>Full Name:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" value="{{Auth::user()->name}}" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Email:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" value="{{Auth::user()->email}}" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Phone:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone" value="{{Auth::user()->phone}}" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Subscription:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="title" type="text" id="title" value="{{$data->title}}" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Months:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="months" type="number" id="months" value="{{$data->months}}" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Price Per Month:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="price" type="number" id="price" value="{{$data->price}}" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Total:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input style="color: red" name="total" type="number" id="total" value="<?php echo $data->months*$data->price;?>" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Start Date:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="start_date" type="text" id="start_date" value="<?php echo date('Y-m-d');?>" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Finish Date:</strong></p>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="finish_date" type="text" id="finish_date" value="<?php $d=strtotime("+" . $data->months . " Months");
                                            echo date('Y-m-d', $d);?>" readonly>
                                        </fieldset>
                                    </div>
                                    <p><strong>Payment Method:</strong></p>
                                    <div class="col-lg-3" style="text-align: center">
                                        <fieldset>
                                            <label>Credit Card</label>
                                            <input type="radio" name="payment" id="payment" value="Credit Card">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-3" style="text-align: center">
                                        <fieldset>
                                            <label>Cheque</label>
                                            <input type="radio" name="payment" id="payment" value="Cheque">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-3" style="text-align: center">
                                        <fieldset>
                                            <label>Paypal</label>
                                            <input type="radio" name="payment" id="payment" value="Paypal">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-3" style="text-align: center">
                                        <fieldset>
                                            <label>Bank Transfer</label>
                                            <input type="radio" name="payment" id="payment" value="Bank Transfer">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Confirm Subscription</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>{{$setting->phone}}</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>{{$setting->email}}</span>
                            </li>
                            <li>
                                <h6>Address</h6>
                                <span>{{$setting->address}}</span>
                            </li>
                            <li>
                                <h6>Fax</h6>
                                <span>{{$setting->fax}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
