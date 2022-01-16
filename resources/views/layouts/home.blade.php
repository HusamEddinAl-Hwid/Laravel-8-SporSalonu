<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/lightbox.css">
    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background: #262626;
    }
    form.search-form input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.search-form button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.search-form button:hover {
        background: #0b7dda;
    }

    form.search-form::after {
        content: "";
        clear: both;
        display: table;
    }

    .rating{
        margin-top: -30px;
        transform: translate(-50%,50%);
        display: flex;
        flex-direction: row-reverse;
    }

    .rating input{
        display: none;
    }

    .rating label{
        display: block;
        cursor: pointer;
        width: 25px;
    }
    .rating label:before{
        content: '\f005';
        font-family: FontAwesome;
        position: relative;
        display: block;
        font-size: 25px;
        color: #101010;
    }
    .rating label:after{
        content: '\f005';
        font-family: FontAwesome;
        position: absolute;
        display: block;
        font-size: 25px;
        color: orange;
        top: 0;
        opacity: 0;
        transition: .5s;
        text-shadow: 0 2px 5px rgba(0,0,0,.5);
    }
    .rating label:hover:after,
    .rating label:hover ~ label:after,
    .rating input:checked ~ label:after{
        opacity: 1;
    }
</style>
<body>

@include('home._header')

@includeWhen($includeWhenYes, 'home._mainbanner')

@includeWhen($includeWhenYes, 'home._slider')

@section('content')
    Contents
@show

@include('home._footer')
@yield('footerjs')
</body>
</html>
