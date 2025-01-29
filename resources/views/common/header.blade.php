<header id="header" class="tra-menu navbar-dark white-scroll">
    <div class="header-wrapper">
        <div class="wsmobileheader clearfix">
            <div class="container d-flex">
                <span class="smllogo d-flex align-items-center">
                    <a class="d-flex align-items-center" href="{{ url('/') }}" >
                        <img class="lt-img" src="{{ asset('/assets/logo.png') }}" alt="mobile-logo" />
                        {{-- <h6 class="ps-3">{{ get_section_content('project', 'site_title') }}</h6> --}}
                    </a>
                </span>
                <a id="wsnavtoggle" class="wsanimated-arrow" href="#"><span /></a>
            </div>
        </div>
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp ">
                <div class="desktoplogo">
                    <a href="{{ url('/') }}" class="logo-black d-flex align-items-center" >
                        <img class="lt-img" src="{{ asset('/assets/logo.png') }}" alt="logo" />
                        {{-- <h5 class="ps-3">{{ get_section_content('project', 'site_title') }}</h5> --}}
                    </a>
                </div>
                <nav class="wsmenu clearfix">
                    <div class="overlapblackbg"></div>
                    <ul class="wsmenu-list nav-theme">
                        @guest
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="{{ url('login') }}" class="h-link">Login/Register</a>
                        </li>
                        @else
                        <li aria-haspopup="true">
                            <a href="#" class="h-link">Dashboard <span class="wsarrow"></span></a>
                            <ul class="sub-menu ico-10">
                                <li aria-haspopup="true" class="h-link"><a href="{{ url('profile') }}">Profile</a></li>
                                <li aria-haspopup="true" class="h-link">
                                    <a href="{{ url('payment/history') }}">Payments
                                        @if(count_user_pending_payments(Auth::user()->id) > 0)
                                        <span class="sm-info bg_logo">{{count_user_pending_payments(Auth::user()->id)}}</span>
                                        @endif
                                    </a>
                                </li>
                                <li aria-haspopup="true" class="h-link"><a href="{{ url('change_password') }}">Change password</a></li>
                                <li aria-haspopup="true" class="h-link"><a href="{{ url('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        @endguest
                        <li class="nl-simple reg-fst-link" aria-haspopup="true">
                            <a href="tel:9724943886" class="h-link link_site">
                                972-494-3886
                            </a>
                        </li>
                        <li class="nl-simple reg-fst-link" aria-haspopup="true">
                            <a href="mailto:info@luxviewwf.com" class="h-link link_site">
                                info@luxviewWF.com
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>