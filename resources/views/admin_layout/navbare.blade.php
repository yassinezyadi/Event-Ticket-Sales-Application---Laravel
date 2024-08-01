
<header class="header">
    <div class="header-inner">		
        <nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-0 pe-2">
            <div class="container-fluid ps-0">
                <button type="button" id="toggleMenu" class="toggle_menu">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <button id="collapse_menu" class="collapse_menu me-4">
                    <i class="fa-solid fa-bars collapse_menu--icon "></i>
                    <span class="collapse_menu--label"></span>
                </button>
                <button class="navbar-toggler order-3 ms-2 pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{ url('/dashbord') }}">
                    <div class="res-main-logo">
                        <img src="images/logo-icon.svg" alt="">
                    </div>
                    <div class="main-logo" id="logo">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="">
                        <img class="logo-inverse" src="{{asset('assets/images/dark-logo.svg')}}" alt="">
                    </div>
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                            <img src="{{asset('assets/images/logo-icon.svg')}}" alt="">
                        </div>
                        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/explore_events')}}">
                                    <i class="fa-solid fa-compass me-2"></i>Explore Events
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-footer"></div>
                </div>
                <div class="right-header order-2">
                    <ul class="align-self-stretch">
                        <li class="dropdown account-dropdown order-3">
                            <a href="#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('assets/images/profile-imgs/img-13.jpg')}}" alt="">
                                <i class="fas fa-caret-down arrow-icon"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
                                <li>
                                    <div class="dropdown-account-header">
                                        <div class="account-holder-avatar">
                                            <img src="{{asset('assets/images/profile-imgs/img-13.jpg')}}" alt="">
                                        </div>
                                        <h5>{{Session::get('username')}}</h5>
                                        <p>{{Session::get('email')}}</p>
                                    </div>
                                </li>
                                <li class="profile-link">
                                    <a href="organiser_profile_view.html" class="link-item">My Profile</a>									
                                    <a href="{{ url('/')}}" class="link-item">Home Page</a>									
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="night_mode_switch__btn">
                                <div id="night-mode" class="fas fa-moon fa-sun"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="overlay"></div>
    </div>
</header>