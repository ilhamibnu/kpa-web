@extends('landing.layout.main')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Blog Details</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="{{ asset('artikel/image/'.$artikel->foto) }}" alt="image">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <span>Posted On:</span>
                                    <a href="#">
                                        {{ $artikel->created_at }}
                                    </a>
                                </li>
                                <li>
                                    <span>Posted By:</span>
                                    <a href="#">{{ $artikel->user->name }}</a>
                                </li>
                            </ul>
                        </div>

                        <h3>{{ $artikel->judul }}</h3>
                        <p>{!! nl2br(e($artikel->isi)) !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
@endsection
