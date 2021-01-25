<!-- main header @s -->
<div class="nk-header nk-header-fluid is-theme">
    <div class="container-xl wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <a href="{{ route('frontend.user.dashboard') }}" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('dashlite/images/logo.png') }}" srcset="{{ asset('dashlite/images/logo2x.png 2x') }}" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('dashlite/images/logo-dark.png') }}" srcset="{{ asset('dashlite/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="{{ route('frontend.user.dashboard') }}" class="logo-link">
                            <img class="logo-light logo-img" src="{{ asset('dashlite/images/logo.png') }}" srcset="{{ asset('dashlite/images/logo2x.png 2x') }}" alt="logo">
                            <img class="logo-dark logo-img" src="{{ asset('dashlite/images/logo-dark.png') }}" srcset="{{ asset('dashlite/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <ul class="nk-menu nk-menu-main ui-s2">
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('frontend.user.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('frontend.licence.reg.form') }}" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Registrations</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('frontend.licence.reg.form') }}" class="nk-menu-link"><span class="nk-menu-text">New Registration</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('frontend.reg.list') }}" class="nk-menu-link"><span class="nk-menu-text">History</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">

                    <li class="dropdown user-dropdown order-sm-first">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status">Administrator</div>
                                    <div class="user-name dropdown-indicator">{{ $logged_in_user->full_name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ $logged_in_user->full_name }}</span>
                                        <span class="sub-text">{{ $logged_in_user->email }}</span>
                                    </div>
                                    <div class="user-action">
                                        <a class="btn btn-icon mr-n2" href="{{ route('frontend.user.account') }}"><em class="icon ni ni-setting"></em></a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="dropdown-inner user-account-info">--}}
{{--                                <h6 class="overline-title-alt">Account Balance</h6>--}}
{{--                                <div class="user-balance">1,494.23 <small class="currency currency-usd">USD</small></div>--}}
{{--                                <div class="user-balance-sub">Locked <span>15,495.39 <span class="currency currency-usd">USD</span></span></div>--}}
{{--                                <a href="#" class="link"><span>Withdraw Balance</span> <em class="icon ni ni-wallet-out"></em></a>--}}
{{--                            </div>--}}
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('frontend.user.account') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
{{--                                    <li><a href="html/invest/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>--}}
{{--                                    <li><a href="html/invest/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>--}}
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('frontend.auth.logout') }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
