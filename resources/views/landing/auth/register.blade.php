@extends('landing.layout.main')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area item-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href="i/">Home</a>
                        </li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Register Area -->
<section class="register-area ptb-50">
    <div class="container">
        <div class="register-form">
            <h2>Register</h2>

            <form action="/user/register" method="POST">
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
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <label>Re-Password</label>
                    <input type="password" name="repassword" class="form-control" placeholder="Password">
                </div>

                <button type="submit">Register now</button>
            </form>

            <div class="important-text">
                <p>Already have an account? <a href="/user/login">Login now!</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Register Area -->
@endsection
