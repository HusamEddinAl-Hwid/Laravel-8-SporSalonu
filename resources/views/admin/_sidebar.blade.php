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
