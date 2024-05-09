<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('landing/assets/img/logo.png') }}" class="black-logo" alt="image">
                        <img src="{{ asset('landing/assets/img/logo-2.png') }}" class="white-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('landing/assets/img/logo.png') }}" class="black-logo" alt="image">
                    <img src="{{ asset('landing/assets/img/logo-2.png') }}" class="white-logo" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/artikel" class="nav-link">
                                Artikel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/contact" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">

                        <div class="option-item">
                            @if (Auth::check() && Auth::user()->role == 'user')
                            <div class="dropdown language-switcher d-inline-block">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>{{ Auth::user()->name }} <i class="bx bx-chevron-down"></i></span>
                                </button>

                                <div class="dropdown-menu">
                                    <a href="/user/pengaduan" class="dropdown-item d-flex align-items-center">
                                        <span>Pengaduan</span>
                                    </a>
                                    <a href="/user/riwayat-pengaduan" class="dropdown-item d-flex align-items-center">
                                        <span>Riwayat Pengaduan</span>
                                    </a>
                                    <a href="/user/profil" class="dropdown-item d-flex align-items-center">
                                        <span>Profil</span>
                                    </a>
                                    <a href="/user/logout" class="dropdown-item d-flex align-items-center">
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </div>

                            @else
                            <div class="option-item">
                                <a href="/user/login" class="default-btn">Login / Register</a>
                            </div>

                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">

                        <div class="option-item">
                            @if (Auth::check() && Auth::user()->role == 'user')
                            <div class="dropdown language-switcher d-inline-block">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>{{ Auth::user()->name }} <i class="bx bx-chevron-down"></i></span>
                                </button>

                                <div class="dropdown-menu">
                                    <a href="/user/pengaduan" class="dropdown-item d-flex align-items-center">
                                        <span>Pengaduan</span>
                                    </a>
                                    <a href="/user/riwayat-pengaduan" class="dropdown-item d-flex align-items-center">
                                        <span>Riwayat Pengaduan</span>
                                    </a>
                                    <a href="/user/logout" class="dropdown-item d-flex align-items-center">
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </div>

                            @else
                            <div class="option-item">
                                <a href="/user/login" class="default-btn">Login / Register</a>
                            </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
