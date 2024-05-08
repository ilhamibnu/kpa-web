<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codeigniter.spruko.com/nowa/nowa_demo/signin by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 08:54:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="CodeIgniter Admin & Dashboard Template, Codeigniter Admin Template, Codeigniter admin panel, Codeigniter Bootstrap 5, Codeigniter admin template Bootstrap 5, Codeigniter Templates Using Bootstrap Admin, codeigniter admin, codeigniter dashboard, Admin & Dashboard Template, admin template, admin dashboard, admin panel, Bootstrap 5 admin template " />

    <!-- Title -->
    <title> Nowa – CodeIgniter Admin & Dashboard Template </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

    <!--  bootstrap css-->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" id="style" />

    <!--- Style css --->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-transparent.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('admin/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('admin/assets/css/animate.css') }}" rel="stylesheet">



    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('admin/assets/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/switcher/demo.css') }}" rel="stylesheet" />
</head>
<body class="ltr error-page1 bg-primary">

    <!-- Switcher -->
    @include('admin.partials.switcher')
    <!-- End Switcher -->
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('admin/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="page">
        <div class="row">
            <div class="d-flex">
                <a class="demo-icon new nav-link" href="javascript:void(0);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs fa-spin" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path>
                        <path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path>
                    </svg>
                </a>
            </div>
        </div>


        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
                        <div class="card-sigin">
                            <!-- Demo content-->
                            <div class="main-card-signin d-md-flex">
                                <div class="wd-100p">
                                    <div class="d-flex mb-4"><a href="index.html"><img src="{{ asset('admin/assets/img/brand/favicon.png') }}" class="sign-favicon ht-40" alt="logo"></a></div>
                                    <div class="">
                                        <div class="main-signup-header">
                                            <h2>Welcome back!</h2>
                                            <h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 p-3">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab5">
                                                            <form action="/login" method="post">
                                                                @method('POST')
                                                                @csrf

                                                                @if($errors->any())
                                                                <div class="alert alert-danger alert-dismissible fade show mt-2">



                                                                    <?php

                                                                        $nomer = 1;

                                                                        ?>

                                                                    @foreach($errors->all() as $error)
                                                                    <li>{{ $nomer++ }}. {{ $error }}</li>
                                                                    @endforeach
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label>Email</label> <input name="email" class="form-control" placeholder="Enter your email" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Password</label> <input name="password" class="form-control" placeholder="Enter your password" type="password">
                                                                </div><button type="submit" class="btn btn-primary btn-block">Sign In</button>

                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- JQuery min js -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/assets/plugins/moment/moment.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('admin/assets/js/eva-icons.min.js') }}"></script>

    <!-- generate-otp js -->
    <script src="{{ asset('admin/assets/js/generate-otp.js') }}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>



    <!-- Theme Color js -->
    <script src="{{ asset('admin/assets/js/themecolor.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('admin/assets/switcher/js/switcher.js') }}"></script>
</body>

<!-- Mirrored from codeigniter.spruko.com/nowa/nowa_demo/signin by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 08:54:17 GMT -->
</html>
