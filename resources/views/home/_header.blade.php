<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        @if($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                        @if($setting->twitter != null)<li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                        @if($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                        @if($setting->youtube != null)<li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>@endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="home" class="logo">
                        Gymso Fitness
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    @php
                        $parentCategories = \App\Http\Controllers\HomeController::categoryList();
                    @endphp
                    <ul class="nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        @auth
                            <li class="has-sub">
                            <a href="javascript:void(0)">{{Auth::user()->name}}</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('myprofile') }}">My Account</a></li>
                                <li><a href="{{ route('admin_logout') }}">Logout</a></li>
                            </ul>
                            </li>
                        @endauth
                        @guest
                            <li class="has-sub">
                                <a href="javascript:void(0)">Apply</a>
                                <ul class="sub-menu">
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Sign Up</a></li>
                                </ul>
                            </li>
                        @endguest
                        @foreach($parentCategories as $rs)
                        <li class="has-sub">
                            <a href="javascript:void(0)">{{$rs->title}}</a>
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                        </li>
                        @endforeach
                        <li class="has-sub">
                            <a href="javascript:void(0)">Info</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
