        <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="{{ asset('template/promote/img/core-img/leaf.png') }}" alt="">
        </div>
    </div>
       
    <header class="header-area">


       <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: Nuuhamtaro@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call 099-333-4545</span></a>
                            </div>

                            <!-- Top Header Content -->


                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->

                                <!-- Login -->

                                @if (Route::has('login'))
                                    @auth
                                <div class="login">
                                    <a href="{{ url('/home') }}"><i class="fa fa-user" aria-hidden="true"></i> <span>Admin</span></a>
                                </div>
                                @else
                                <!-- Cart -->

                                @if (Route::has('login'))
                                <div class="login">
                                    <a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>

                                <div class="login">
                                    <a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i> <span>register</span></a>
                                </div>
                                @endif
                                       @endauth
                                @endif

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src=(img/core-img/logo.png) alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <!-- <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div> -->
                </div>
            </div>
        </div>
    </header>