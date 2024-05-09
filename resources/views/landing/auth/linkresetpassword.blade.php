@extends('landing.layout.main')

@section('content')


<!-- Start Page Banner -->
<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Reset Password</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Reset Password</li>
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
            <h2>Reset password</h2>

            <form action="/user/link-reset-password" method="POST">
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
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>

                <button type="submit">Send Link</button>
            </form>

            <div class="important-text">
                <p>Don't have an account? <a href="/user/register">Register now!</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection
