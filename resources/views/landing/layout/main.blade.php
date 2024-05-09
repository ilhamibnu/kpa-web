<!doctype html>
<html lang="zxx" class="theme-light">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/meanmenu.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/boxicons.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.carousel.min.css') }}">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.theme.default.min.css') }}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/odometer.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/magnific-popup.min.css') }}">
    <!-- Imagelightbox CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/imagelightbox.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/dark.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/responsive.css') }}">

    <title>Ketan - Childcare & Kids School HTML Template</title>

    <link rel="icon" type="image/png" href="{{ asset('landing/assets/img/favicon.png') }}">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader">
            <div class="wrapper">
                <div class="circle circle-1"></div>
                <div class="circle circle-1a"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    @include('landing.partials.navbar')
    <!-- End Navbar Area -->

    @yield('content')

    <!-- Start Footer Area -->
    @include('landing.partials.footer')
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())

                    </script> Ketan. All Rights Reserved by
                    <a href="https://envytheme.com/" target="_blank">
                        EnvyTheme
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- dark version -->
    {{-- <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div> --}}
    <!-- dark version -->

    <!-- Jquery Slim JS -->
    <script src="{{ asset('landing/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('landing/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('landing/assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('landing/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('landing/assets/js/jquery.magnific-popup.min.j') }}s"></script>
    <!-- Imagelightbox JS -->
    <script src="{{ asset('landing/assets/js/imagelightbox.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('landing/assets/js/odometer.min.js') }}"></script>
    <!-- Jquery Appear JS -->
    <script src="{{ asset('landing/assets/js/jquery.appear.min.js') }}"></script>
    <!-- Ajaxchimp JS -->
    <script src="{{ asset('landing/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset('landing/assets/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('landing/assets/js/contact-form-script.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(Session::get('login'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Login Berhasil"
        });

    </script>
    @endif

    @if(Session::get('register'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Register Berhasil"
        });

    </script>
    @endif

    @if(Session::get('logout'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Logout Berhasil"
        });

    </script>
    @endif

    @if(Session::get('gagallogin'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Login Gagal"
        });

    </script>
    @endif

    @if(Session::get('pengaduan'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Pengaduan Berhasil Dibuat"
        });

    </script>
    @endif

    @if(Session::get('update'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Profil Berhasil Diupdate"
        });

    </script>
    @endif

    @if(Session::get('linkkadaluarsa'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Link Reset Password Kadaluarsa"
        });

    </script>
    @endif

    @if(Session::get('emailtidakada'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Email Tidak Terdaftar"
        });

    </script>
    @endif

    @if(Session::get('resetpasswordberhasil'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Reset Password Berhasil"
        });

    </script>
    @endif


    @yield('script')

</body>
</html>
