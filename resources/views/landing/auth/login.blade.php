@extends('landing.layout.main')

@section('content')


<!-- Start Page Banner -->
<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Login</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>

            <form action="/user/login" method="POST">
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
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email or phone">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                        <a href="#" class="lost-your-password">Forgot your password?</a>
                    </div>
                </div>

                <button type="submit">Login</button>
            </form>

            <div class="important-text">
                <p>Don't have an account? <a href="/user/register">Register now!</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection
