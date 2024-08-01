<!-- Header Start-->
<header class="header">
    <div class="header-inner">
        <nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{ route('client.index')}}">
                    <div class="res-main-logo">
                        <img src="{{asset('assets/images/logo-icon.svg')}}" alt="">
                    </div>
                    <div class="main-logo" id="logo">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="">
                        <img class="logo-inverse" src="{{asset('assets/images/dark-logo.svg')}}" alt="">
                    </div>
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                            <img src="{{asset('assets/images/logo-icon.svg')}}" alt="">
                        </div>
                        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="offcanvas-top-area">
                            <div class="create-bg">
                                <a href="create.html" class="offcanvas-create-btn">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>Create Event</span>
                                </a>
                            </div>
                        </div>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/explore_events">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/contact_us">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/about_us">About Us</a> 
                            </li>

                            @if(Session::get('role') === 'admin')
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ url('/dashbord')}}">Dashboard </a>
                            </li>
                            @endif

                        </ul>
                    </div>

                </div>
                @if(Session::get('email') == null)
                <a href="{{url('/sign_in')}}" class="create-btn btn-hover">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Login</span>
                </a>
                @else
                <div class="right-header order-2">
                    <ul class="align-self-stretch">
                        <li>
                            <a href="/create_event" class="create-btn btn-hover">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>Create Event</span>
                            </a>
                        </li>
                        <li class="dropdown account-dropdown">
                            <a href="#" class="account-link" role="button" id="accountClick"
                                data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('assets/images/profile-imgs/img-13.jpg')}}" alt="">
                                <i class="fas fa-caret-down arrow-icon"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
                                aria-labelledby="accountClick">
                                <li>
                                    <div class="dropdown-account-header">
                                        <div class="account-holder-avatar">
                                            <img src="{{asset('assets/images/profile-imgs/img-13.jpg')}}" alt="">
                                        </div>
                                        <h5>John Doe</h5>
                                        <p>johndoe@example.com</p>
                                    </div>
                                </li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf

                                    <li class="profile-link">
                                        <button class="dropdown-item" type="submit">
                                            Log Out
                                        </button>
                                    </li>
                                </form>

                            </ul>
                        </li>


                        <li>
                            <div class="night_mode_switch__btn">
                                <div id="night-mode" class="fas fa-moon fa-sun"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif

            </div>
        </nav>
        <div class="overlay"></div>
    </div>
</header>
<!-- Header End-->