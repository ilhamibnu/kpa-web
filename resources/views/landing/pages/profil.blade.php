@extends('landing.layout.main')

@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Profil</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Profil</li>
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
            <form action="/user/update-profil" method="POST">
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
                    <h3>Profil</h3>
                </div>

                <div class="form-group">
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Your Name">
                </div>

                <div class="form-group">
                    <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Email Address">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="password" name="repassword" class="form-control" placeholder="Repassword">
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
