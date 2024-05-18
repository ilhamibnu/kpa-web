@extends('landing.layout.main')
@section('title', 'Pengaduan - ')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Pengaduan</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Pengaduan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Apply Area -->
<section class="apply-area ptb-100">
    <div class="container">
        <div class="apply-form">
            <div class="text-center">
                <a href="#" class="default-btn">
                    Selamat datang di layanan pengaduan Forum Anak Kabupaten Pasuruan. <br>
                    Kamu bisa mengisi form di bawah jika ingin membuat pengaduan.
                </a>
            </div>
            <form action="/user/pengaduan" method="POST">
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
                @csrf
                @method('POST')
                <div class="content">
                    <h3>Pengaduan</h3>
                </div>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>

                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email Address">
                </div>

                <div class="form-group">
                    <input type="text" name="no_telp" class="form-control" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="id_kecamatan" class="form-control">
                        <option value="" disabled selected>Pilih Kecamatan</option>
                        @foreach($kecamatan as $k)
                        <option value="{{ $k->id }}">{{ $k->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="id_kategori_pelaporan" class="form-control">
                        <option value="" disabled selected>Pilih Kategori</option>
                        @foreach($kategori_pelaporan as $k)
                        <option value="{{ $k->id }}">{{ $k->name }}</option>
                        @endforeach
                    </select>
                </div>


                {{-- <div class="form-group">
                    <input type="text" name="subjek" class="form-control" placeholder="Subject">
                </div> --}}

                <div class="form-group">
                    <textarea rows="7" class="form-control" name="isi" placeholder="Write Something"></textarea>
                </div>

                <button type="submit" class="default-btn">
                    Submit Now
                </button>
            </form>


            @if(Session::get('pengaduan'))
            <div class="text-center mt-4">
                <a href="#" class="default-btn">
                    Selamat datang di layanan pengaduan Forum Anak Kabupaten Pasuruan. <br>
                    Ayo lebih dekat dengan FA Kab. Pasuruan dengan melihat bot telegram kami
                </a>
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
            @endif

        </div>
    </div>
</section>
<!-- End Apply Area -->
@endsection
