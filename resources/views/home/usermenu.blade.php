@auth()
<div class="right-info">
    <ul>
        <li>
            <h6 style="font-size: 20px; color: orange"><a>User Panel</a></h6>
        </li>
        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if ($userRoles->contains('admin'))
        <li>
            <h6><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></h6>
        </li>
        @endif
        <li>
            <h6><a href="{{route('myprofile')}}">My Profile</a></h6>
        </li>
        <li>
            <h6><a href="{{route('user_orders')}}">Subscriptions</a></h6>
        </li>
        <li>
            <h6><a href="{{route('myreviews')}}">My Reviews</a></h6>
        </li>
        <li>
            <h6><a href="{{route('logout')}}">Logout</a></h6>
        </li>
    </ul>
</div>
@endauth
