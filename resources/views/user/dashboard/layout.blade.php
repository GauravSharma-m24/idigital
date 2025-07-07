<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IDIGITALPRENEUR | Dashboard</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- CSS
	============================================ -->
    
    <!-- Google Fonts CSS -->  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Fa fa Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">


    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/flaticon.css') }}">

    <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    {{-- <link rel="stylesheet" href="{{ asset('css/vendor/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"> --}}

</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section">

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">

                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <img src="{{asset('images/logo.png')}}" alt="logo" class="logo-img">
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li>
                                    <a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('coursepage')}}">Our Courses</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sign In & Up Start -->
                        <div class="header-sign-in-up d-none d-lg-block">
                            <div class="profile-dropdown">
                                <button class="profile-button">
                                    <!-- Dynamic profile image - replace with your actual image source -->
                                    <img src="{{ session('user')->image ? asset('uploads/profile/' . session('user')->image) : asset('images/default-profile.png') }}" 
                                        alt="Profile" 
                                        class="profile-image">
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('user_profile') }}">My Profile</a>
                                    <a href="{{ route('certificate') }}">Certificates</a>
                                    <a href="{{ route('affiliate_panel') }}">Affiliate Panel</a>
                                    <a href="">My Courses</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#socialMediaModal">Social Media</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                            Logout
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Header Sign In & Up End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Main End -->

                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu">

            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Sing In & Up Start -->
            <div class="mobile-sign-in-up">
                <div class="mobile-profile-dropdown">
                    <input type="checkbox" id="profile-toggle" class="mobile-profile-toggle">
                    <label for="profile-toggle" class="mobile-profile-button">
                        <img src="{{ session('user')->image ? asset('uploads/profile/' . session('user')->image) : asset('images/default-profile.png') }}" 
                                        alt="Profile" 
                                        class="profile-image">
                    </label>
                    <div class="mobile-dropdown-menu">
                        <a href="{{ route('user_profile') }}">My Profile</a>
                                    <a href="{{ route('certificate') }}">Certificates</a>
                                    <a href="{{ route('affiliate_panel') }}">Affiliate Panel</a>
                                    <a href="">My Courses</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#socialMediaModal">Social Media</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                            Logout
                                        </a>
                                    </form>
                    </div>
                </div>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li>
                        <a href="{{route('coursepage')}}">Our Courses</a>
                    </li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->

        @yield('content')

    </div>

        <!-- Social Media Modal -->
        <div class="modal fade" id="socialMediaModal" tabindex="-1" aria-labelledby="socialMediaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="d-flex justify-content-center gap-8 flex-wrap">
                            <a href="#"><img src="{{asset('images/social-media/fb.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('images/social-media/instagram.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('images/social-media/x.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('images/social-media/whatsapp.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('images/social-media/yt.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('images/social-media/linkedin.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    {{-- <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script> --}}

    <!-- Plugins JS -->
    {{-- <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/video-playlist.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ajax-contact.js') }}"></script> --}}

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="{{ asset('js/plugins.min.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>