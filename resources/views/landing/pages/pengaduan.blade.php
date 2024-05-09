@extends('landing.layout.main')

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
                    <input type="text" name="subjek" class="form-control" placeholder="Subject">
                </div>

                <div class="form-group">
                    <textarea rows="7" class="form-control" name="isi" placeholder="Write Something"></textarea>
                </div>

                <button type="submit" class="default-btn">
                    Submit Now
                </button>
            </form>
        </div>
    </div>
</section>
<!-- End Apply Area -->
@endsection
