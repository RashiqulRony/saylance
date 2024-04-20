<header class="header header-fixed header-fourteen header-sixteen">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ route('web.home') }}" class="navbar-brand logo">
                    <h3><b style="color: darkorange;">Say</b><b style="color: cornflowerblue;">lance</b></h3>
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('web.home') }}" class="menu-logo">
                        <img src="{{ asset('assets') }}/img/logo.png" class="img-fluid" alt="Logo" />
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active">
                        <a href="javascript:void(0);">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu mega-submenu">
                            <li></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Designer <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu"></ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Job Post <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu"></ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Assert <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu"></ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu"></ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Contact us <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu"></ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Help? <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu"></ul>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="login-in-sixteen">
                    <a href="{{ route('login') }}" class="open-tabs btn btn-primary reg-btn reg-btn-sixteen"><i class="feather-lock me-2"></i>Login</a>
                </li>
                <li class="login-in-sixteen">
                    <a href="{{ route('register') }}" class="open-tabs btn btn-primary reg-btn reg-btn-sixteen"><i class="feather-user me-2"></i>Sign Up</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<br />
<br />
<br />
