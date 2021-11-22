<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Elon Dust">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/tooplate-gymso-style.css">
    <!--
    Tooplate 2119 Gymso Fitness
    https://www.tooplate.com/view/2119-gymso-fitness
    -->
    @yield('css')
    @yield('headerjs')
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
@include('home._nav')

@include('home._hero')

@section('content')
    Contents
@show

@include('home._footer')
@yield('footerjs')
</body>
</html>
