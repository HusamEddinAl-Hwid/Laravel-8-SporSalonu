@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title', $setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords', $setting->keywords)

@section('content')
<div class="section">
    <div class="container">
        <div class="row">

            Content

        </div>
    </div>
</div>
@endsection
