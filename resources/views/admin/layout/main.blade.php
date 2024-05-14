<!doctype html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="CodeIgniter Admin & Dashboard Template, Codeigniter Admin Template, Codeigniter admin panel, Codeigniter Bootstrap 5, Codeigniter admin template Bootstrap 5, Codeigniter Templates Using Bootstrap Admin, codeigniter admin, codeigniter dashboard, Admin & Dashboard Template, admin template, admin dashboard, admin panel, Bootstrap 5 admin template" />

    <!-- Title -->
    <title>@yield('title') Forum Anak Kabupaten Pasuruan</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/img/logo.jpg') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Include Leaflet JavaScript -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!--  bootstrap css-->
    <link id="style" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

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

    <style>


    </style>
</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Switcher -->
    @include('admin.partials.switcher')
    <!-- End Switcher -->
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('admin/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div>
            <!-- main-header -->
            @include('admin.partials.header')
            <!-- /main-header -->

            <!-- main-sidebar -->
            @include('admin.partials.sidebar')
            <!-- main-sidebar -->
        </div>
        <!-- main-content -->
        <div class="main-content app-content">
            <!-- container -->
            @yield('content')
            <!-- Container closed -->

            @include('admin.partials.modalupdate')
        </div>
        <!-- main-content closed -->

        @include('admin.partials.footer')
    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/assets/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('admin/assets/js/eva-icons.min.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('admin/assets/plugins/side-menu/sidemenu.js') }}"></script>


    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('admin/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- INTERNAL Apexchart js -->
    <script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('admin/assets/js/index.js') }}"></script>

    <!-- Chart-circle js -->
    <script src="{{ asset('admin/assets/js/circle-progress.min.js') }}"></script>

    {{-- <!-- Internal Data tables -->
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script> --}}

    <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Internal Data tables -->
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/table-data.js') }}"></script>

    <!--Internal  Vector-maps js -->
    <script src="{{ asset('admin/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.canada.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.algeria.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.argentina.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.europe.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.germany.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.russia.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.france.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map.js') }}"></script>

    <!-- Internal Vector-sampledata js -->
    <script src="{{ asset('admin/assets/js/jquery.vmap.sampledata.js') }}"></script>

    <!--Internal Fileuploads js-->
    <script src="{{ asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!--Internal Fancy uploader js-->
    <script src="{{ asset('admin/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/fancyuploder/jquery.fileupload.j') }}s"></script>
    <script src="{{ asset('admin/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!--Internal  Sweet-Alert js-->
    <script src="{{ asset('admin/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>

    <!-- Sweet-alert js  -->
    <script src="{{ asset('admin/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sweet-alert.js') }}"></script>



    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2.js') }}"></script>


    <!-- Sticky js -->
    <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Theme Color js -->
    <script src="{{ asset('admin/assets/js/themecolor.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('admin/assets/switcher/js/switcher.js') }}"></script>

    @yield('js')

    @if(Session::get('store'))
    <script>
        swal("Done!"
            , "Data Berhasil Ditambahkan"
            , "success"
            , {
                button: "OK"
            , });

    </script>
    @endif

    @if(Session::get('update'))
    <script>
        swal("Done!"
            , "Data Berhasil Diubah"
            , "success"
            , {
                button: "OK"
            , });

    </script>
    @endif

    @if(Session::get('destroy'))
    <script>
        swal("Done!"
            , "Data Berhasil Dihapus"
            , "success"
            , {
                button: "OK"
            , });

    </script>
    @endif


    @if(Session::get('login'))
    <script>
        swal("Done!"
            , "Login Berhasil"
            , "success"
            , {
                button: "OK"
            , });

    </script>
    @endif

    @if(Session::get('updateprofil'))
    <script>
        swal("Done!"
            , "Profil Berhasil Diubah"
            , "success"
            , {
                button: "OK"
            , });

    </script>
    @endif

    @if(Session::get('gagal'))
    <script>
        swal("Gagal!"
            , "Data Gagal Dihapus"
            , "error"
            , {
                button: "OK"
            , });

    </script>
    @endif

    @if(Session::get('andatidakpunyaakses'))
    <script>
        swal("Gagal!"
            , "Anda Tidak Memiliki Akses"
            , "error"
            , {
                button: "OK"
            , });

    </script>
    @endif


</body>

</html>
