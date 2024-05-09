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
                                <span>Play, Learn and Grow</span>
                                <h1>We are a Childcare Professional</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        Learn More
                                    </a>
                                    <a href="#" class="optional-btn">
                                        Find Out More
                                    </a>
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

<!-- Start Who We Are Area -->
<section class="who-we-are ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span>Who We Are</span>
                    <h3>Learn About Our Work and Cultural Activities</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <ul class="who-we-are-list">
                        <li>
                            <span>1</span>
                            Homelike Environment
                        </li>
                        <li>
                            <span>2</span>
                            Quality Educators
                        </li>
                        <li>
                            <span>3</span>
                            Safety and Security
                        </li>
                        <li>
                            <span>4</span>
                            Play to Learn
                        </li>
                    </ul>
                    <div class="who-we-are-btn">
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="who-we-are-image-wrap">
                    <img src="{{ asset('landing/assets/img/who-we-are/who-we-are-2.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Activities Area -->
<section class="activities-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Our Activities</span>
            <h2>Our More Enjoyable Activities</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-activities">
                    <div class="number">
                        <span>01</span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="#">Math Club</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="activities-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-activities">
                    <div class="number">
                        <span class="bg-2">02</span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="#">Music Training</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="activities-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-activities">
                    <div class="number">
                        <span class="bg-3">03</span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="#">World Kids Day</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="activities-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-activities">
                    <div class="number">
                        <span class="bg-4">04</span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="#">Full-Day Session</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="activities-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-activities">
                    <div class="number">
                        <span class="bg-5">05</span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="#">Art Competition</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="activities-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-activities">
                    <div class="number">
                        <span class="bg-6">06</span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="#">Museum Visit</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="activities-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Activities Area -->

<!-- Start Class Area -->
<section class="class-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Classes</span>
            <h2>Popular Classes</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="{{ asset('landing/assets/img/class/class-1.jpg') }}" alt="image">
                        </a>
                    </div>

                    <div class="class-content">
                        <div class="price">$880</div>
                        <h3>
                            <a href="#">Color Matching</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="class-list">
                            <li>
                                <span>Age:</span>
                                3-5 Year
                            </li>
                            <li>
                                <span>Time:</span>
                                8-10 AM
                            </li>
                            <li>
                                <span>Seat:</span>
                                25
                            </li>
                        </ul>

                        <div class="class-btn">
                            <a href="#" class="default-btn">Join Class</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="{{ asset('landing/assets/img/class/class-2.jpg') }}" alt="image">
                        </a>
                    </div>

                    <div class="class-content">
                        <div class="price">$790</div>
                        <h3>
                            <a href="#">Learning Disciplines</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="class-list">
                            <li>
                                <span>Age:</span>
                                3-5 Year
                            </li>
                            <li>
                                <span>Time:</span>
                                8-10 AM
                            </li>
                            <li>
                                <span>Seat:</span>
                                25
                            </li>
                        </ul>

                        <div class="class-btn">
                            <a href="#" class="default-btn">Join Class</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="{{ asset('landing/assets/img/class/class-3.jpg') }}" alt="image">
                        </a>
                    </div>

                    <div class="class-content">
                        <div class="price">$590</div>
                        <h3>
                            <a href="#">Drawing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="class-list">
                            <li>
                                <span>Age:</span>
                                3-5 Year
                            </li>
                            <li>
                                <span>Time:</span>
                                8-10 AM
                            </li>
                            <li>
                                <span>Seat:</span>
                                25
                            </li>
                        </ul>

                        <div class="class-btn">
                            <a href="#" class="default-btn">Join Class</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="class-shape">
        <div class="shape-1">
            <img src="{{ asset('landing/assets/img/class/class-shape-1.png') }}" alt="image">
        </div>
        <div class="shape-2">
            <img src="{{ asset('landing/assets/img/class/class-shape-2.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Class Area -->

<!-- Start Event Area -->
<section class="event-area bg-ffffff bg-color pt-100 pb-70">
    <div class="container-fluid">
        <div class="section-title">
            <span>Events</span>
            <h2>Upcoming Events</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('landing/assets/img/event/event-1.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="event-content">
                                <h3>
                                    <a href="#">Annual Cultural Programme</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>12</h4>
                                <span>September</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('landing/assets/img/event/event-2.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="event-content">
                                <h3>
                                    <a href="#">World Kids Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>18</h4>
                                <span>January</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('landing/assets/img/event/event-3.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="event-content">
                                <h3>
                                    <a href="#">World Drawing Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>25</h4>
                                <span>March</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('landing/assets/img/event/event-4.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="event-content">
                                <h3>
                                    <a href="#">Teachers Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>30</h4>
                                <span>April</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Event Area -->

<!-- Start Facilities Area -->
<section class="facilities-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Our Core Values</span>
            <h2>Best Facilities For Kids</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="single-facilities">
                    <div class="number">
                        <span>01</span>
                    </div>
                    <div class="facilities-content">
                        <h3>
                            <a href="#">Active Learning</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                </div>

                <div class="single-facilities">
                    <div class="number">
                        <span class="bg-2">02</span>
                    </div>
                    <div class="facilities-content">
                        <h3>
                            <a href="#">Safe Environment</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                </div>

                <div class="single-facilities">
                    <div class="number">
                        <span class="bg-3">03</span>
                    </div>
                    <div class="facilities-content">
                        <h3>
                            <a href="#">Fully Equipment</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="facilities-image">
                    <img src="{{ asset('landing/assets/img/facilities/facilities-1.png') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-facilities">
                    <div class="number">
                        <span class="bg-4">04</span>
                    </div>
                    <div class="facilities-content">
                        <h3>
                            <a href="#">Expert Teacher</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                </div>

                <div class="single-facilities">
                    <div class="number">
                        <span class="bg-5">05</span>
                    </div>
                    <div class="facilities-content">
                        <h3>
                            <a href="#">Art Class</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                </div>

                <div class="single-facilities">
                    <div class="number">
                        <span class="bg-6">06</span>
                    </div>
                    <div class="facilities-content">
                        <h3>
                            <a href="#">Sport Section</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="value-shape">
        <div class="shape-1">
            <img src="{{ asset('landing/assets/img/value/value-shape-1.png') }}" alt="image">
        </div>
        <div class="shape-2">
            <img src="{{ asset('landing/assets/img/value/value-shape-2.png') }}" alt="image">
        </div>
        <div class="shape-3">
            <img src="{{ asset('landing/assets/img/value/value-shape-3.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Facilities Area -->

<!-- Start Teacher Area -->
<section class="teacher-area pb-70">
    <div class="container">
        <div class="section-title">
            <span>Our Core Teacher</span>
            <h2>Our Expert Teacher</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-teacher-box">
                    <div class="image">
                        <img src="{{ asset('landing/assets/img/teacher/teacher-5.png') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>Glims Bond</h3>
                        <span>Music Teacher</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-teacher-box">
                    <div class="image">
                        <img src="{{ asset('landing/assets/img/teacher/teacher-6.png') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>Sherlock Bin</h3>
                        <span>Math Teacher</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-teacher-box">
                    <div class="image">
                        <img src="{{ asset('landing/assets/img/teacher/teacher-7.png') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>Smith Broke</h3>
                        <span>English Teacher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Teacher Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area bg-color ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonials</span>
            <h2>What Parents Say About Us</h2>
        </div>

        <div class="feedback-slides owl-carousel owl-theme">
            <div class="feedback-item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="feedback-image">
                            <img src="{{ asset('landing/assets/img/testimonials/testimonials-4.jpg') }}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="feedback-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <div class="feedback-info">
                                <h3>Glims Bond</h3>
                                <span>Music Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feedback-item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="feedback-image">
                            <img src="{{ asset('landing/assets/img/testimonials/testimonials-5.jp') }}g" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="feedback-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <div class="feedback-info">
                                <h3>Priestly Herbart</h3>
                                <span>Math Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>News and Blog</span>
            <h2>Latest News</h2>
        </div>

        <div class="row">

            @foreach ($artikel as $data )
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="blog-image">
                        <a href="#">
                            <img src="{{ asset('artikel/image/'.$data->foto) }}" alt="image">
                        </a>
                    </div>

                    <div class="blog-content">
                        <ul class="post-meta">
                            <li>
                                <span>By Admin:</span>
                                <a href="#">{{ $data->user->name }}</a>
                            </li>
                            <li>
                                <span>Date:</span>
                                {{ $data->created_at }}
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">{{ $data->judul }}</a>
                        </h3>
                        <p>
                            {{ $str = Str::limit($data->isi, 100) }}
                        </p>

                        <div class="blog-btn">
                            <a href="/user/artikel/{{ $data->id }}" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-item">
                <img src="{{ asset('landing/assets/img/partner/partner-1.png') }}" alt="image">
            </div>

            <div class="partner-item">
                <img src="{{ asset('landing/assets/img/partner/partner-2.png') }}" alt="image">
            </div>

            <div class="partner-item">
                <img src="{{ asset('landing/assets/img/partner/partner-3.png') }}" alt="image">
            </div>

            <div class="partner-item">
                <img src="{{ asset('landing/assets/img/partner/partner-4.png') }}" alt="image">
            </div>

            <div class="partner-item">
                <img src="{{ asset('landing/assets/img/partner/partner-5.png') }}" alt="image">
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

@endsection
