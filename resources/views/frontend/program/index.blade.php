@extends('layouts.frontend')

@section('title', 'List Program')

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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/distribusi') }}">
                                Distribusi
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/program') }}">
                                Program <span class="sr-only"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Program Bantuan Section Start -->
<section id="offer-section" class="offer_section hero_next_section-margin layout_padding" style="margin-top: 0;">
    <div class="container">
        <div class="heading_container">
            <h2>Program Bantuan</h2>
            <p>
                Tujuan dari halaman ini adalah untuk memberikan informasi yang jelas dan mudah dipahami mengenai berbagai program bantuan 
                yang dapat diakses oleh masyarakat. Dengan informasi yang terstruktur dengan baik, pengunjung dapat dengan mudah menemukan 
                rincian mengenai syarat, cara pendaftaran, serta manfaat yang bisa didapatkan dari setiap program bantuan.
            </p>
        </div>
        <div class="row">
            @foreach ($program_bantuan as $program)
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="img-box">
                            <a href="{{ $program->link ?? 'https://kemensos.go.id/' }}">
                                <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->nama_program }}" class="img-fluid mb-3">
                            </a>
                        </div>
                        <div class="detail-box">
                            <h6>{{ $program->nama_program }}</h6>
                            <p>{{ $program->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Program Bantuan Section End -->

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
@endsection
