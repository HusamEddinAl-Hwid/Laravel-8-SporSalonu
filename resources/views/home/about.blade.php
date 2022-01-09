@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', 'About Us')

@section('content')
    <div class="col-sm-12">
        <h1>About Us</h1>
        aaaaaaaaaaaaaaaaaaaaaaaa
        <br>
        bbbbbbbbbbbbbbb<br>
        cccccccccccccccccccccccc<br>
    </div>
@endsection
