@extends('landing.layout.main')

@section('content')
<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="main-banner-item banner-item-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="main-banner-content">
                                {{-- // alert info --}}
                                <div class="alert alert-warning alert-dismissible fade show mt-2">
                                    <strong>Perhatian!</strong> Website ini masih dalam tahap pengembangan, mohon maaf atas ketidaknyamanan ini.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <span>Selamat datang di layanan Forum Anak Kabupaten Pasuruan</span>
                                <h1>Forum Anak Adalah Wadah Partisipasi Anak</h1>
                                <p>dimana anggotanya merupakan perwakilan dari Kelompok Anak atau Kelompok Kegiatan Anak atau perseorangan, dan dibina oleh pemerintah, sebagai sarana menyalurkan aspirasi, suara, pendapat, keinginan, dan kebutuhan Anak dalam proses pembangunan.</p>

                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        Yuk jadi Pelopor dan Pelapor menuju Anak Kabupaten Pasuruan yang sehat, cerdas, ceria
                                    </a>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="#" class="default-btn">
                                                Ayo lebih dekat dengan FA Kab. Pasuruan dengan melihat bot telegram kami

                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-footer-widget">

                                                <ul class="social">
                                                    <li>
                                                        <a href="https://t.me/FAKabPasuruanBot" target="_blank">
                                                            <i class="bx bxl-telegram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="banner-btn">

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="main-banner-image-wrap">
                                <img src="{{ asset('landing/assets/img/main-banner/main-banner-1.png') }}" alt="image">

                                <div class="banner-image-wrap-shape">
                                    <img src="{{ asset('landing/assets/img/main-banner/main-banner-shape-1.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner-shape">
        <div class="shape-5">
            <img src="{{ asset('landing/assets/img/main-banner/banner-shape-5.png') }}" alt="image">
        </div>

        <div class="shape-2">
            <img src="{{ asset('landing/assets/img/main-banner/banner-shape-2.png') }}" alt="image">
        </div>

        <div class="shape-6">
            <img src="{{ asset('landing/assets/img/main-banner/banner-shape-6.png') }}" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{ asset('landing/assets/img/main-banner/banner-shape-4.png') }}" alt="image">
        </div>
    </div>
</div>
<!-- End Main Banner Area -->



@endsection
