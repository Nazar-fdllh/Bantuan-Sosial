@extends('layouts.frontend')

@section('title', 'Biografi Programmer')

@section('content')
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                <span>
                    Sistem Informasi Bantuan Sosial
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/about') }}">
                                About <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/distribusi') }}">
                                Distribusi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- About Section Start -->
<section class="about_section py-5">
    <div class="container">
        <div class="row">
            <!-- Programmer 1 -->
            <div class="col-md-6 mb-4">
                <div class="about_box text-center">
                    <img src="{{ asset('assets/images/download.jpg') }}" alt="Programmer 1" 
                            class="img-fluid rounded-circle mb-3" 
                            style="max-width: 150px; height: auto;">
                    <h3>Programmer 1</h3>
                    <p><strong>Nama:</strong> John Doe</p>
                    <p><strong>Bio:</strong> Seorang programmer dengan pengalaman lebih dari 6 tahun dalam pengembangan web. Memiliki keahlian di PHP, Laravel, dan JavaScript.</p>
                    <p><strong>Keahlian:</strong> Backend Development, API Integration, Database Management</p>
                </div>
            </div>

            <!-- Programmer 2 -->
            <div class="col-md-6 mb-4">
                <div class="about_box text-center">
                    <img src="{{ asset('assets/images/download2.jpg') }}" alt="Programmer 2" 
                            class="img-fluid rounded-circle mb-3" 
                            style="max-width: 150px; height: auto;">
                    <h3>Programmer 2</h3>
                    <p><strong>Nama:</strong> Jane Smith</p>
                    <p><strong>Bio:</strong> Programmer dengan fokus pada front-end development dan desain antarmuka pengguna. Terampil dalam HTML, CSS, React.js, dan UX/UI Design.</p>
                    <p><strong>Keahlian:</strong> Frontend Development, Web Design, User Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section End -->

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
@endsection
