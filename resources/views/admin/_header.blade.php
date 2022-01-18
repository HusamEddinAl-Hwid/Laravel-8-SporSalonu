<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <div class="avatar-dropdown" id="icon">
            @auth
            <span>{{Auth::user()->name}}</span>
                @if(Auth::user()->profile_photo_path)
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                @endif
        </div>
        <!-- Account dropdawn-->
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                        <span class="material-icons mdl-list__item-avatar">
                            @if(Auth::user()->profile_photo_path)
                                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                            @endif
                        </span>
                        <span>{{Auth::user()->name}}</span>
                        <span class="mdl-list__item-sub-title">{{Auth::user()->email}}</span>
                    </span>
            </li>
            <li class="list__item--border-top"></li>
            <a href="{{ route('admin_logout') }}">
                <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
                        </span>
                    @endauth
                </li>
            </a>
        </ul>
    </div>
</header>
