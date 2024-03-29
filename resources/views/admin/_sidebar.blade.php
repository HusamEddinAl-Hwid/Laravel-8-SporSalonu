<div class="mdl-layout__drawer">
    <header>darkboard</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link" href="{{ route('admin_home') }}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Home
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_category') }}">
                            <i class="material-icons">view_comfy</i>
                            Category
                            <i class="material-icons"></i>
                        </a>
                    </div>

                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_products') }}">
                            <i class="material-icons">pages</i>
                            Products
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_setting') }}">
                            <i class="material-icons">settings</i>
                            Settings
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_message') }}">
                            <i class="material-icons">message</i>
                            Contact Messages
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_review') }}">
                            <i class="material-icons">rate_review</i>
                            Reviews
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_faq') }}">
                            <i class="material-icons">question_answer</i>
                            FAQ
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                            Orders
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{ route('admin_orders') }}">
                                All Orders
                            </a>
                            <a class="mdl-navigation__link" href="{{ route('admin_order_list',['status'=>'New']) }}">
                                New Orders
                            </a>
                            <a class="mdl-navigation__link" href="{{ route('admin_order_list',['status'=>'Accepted']) }}">
                                Accepted Orders
                            </a>
                            <a class="mdl-navigation__link" href="{{ route('admin_order_list',['status'=>'Completed']) }}">
                                Completed Orders
                            </a>
                            <a class="mdl-navigation__link" href="{{ route('admin_order_list',['status'=>'Cancelled']) }}">
                                Cancelled Orders
                            </a>
                        </div>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('admin_users') }}">
                            <i class="material-icons">verified_user</i>
                            Users
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <div class="mdl-layout-spacer"></div>
                    <hr>
                    <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                        <i class="material-icons" role="presentation">link</i>
                        GitHub
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>
