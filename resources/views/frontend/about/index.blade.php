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
                            <a class="nav-link" href="{{ url('/program') }}"> Program</a>
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
            <h1 class="text-center mb-5">About Us</h1>
            <div class="row">
                @forelse ($profils as $profil)
                    <div class="col-md-6 mb-4">
                        <div class="about_box text-center shadow p-4 rounded bg-light">
                            @if ($profil->gambar)
                                <img src="{{ asset('storage/' . $profil->gambar) }}" 
                                     alt="{{ $profil->nama }}" 
                                     class="img-fluid rounded-circle mb-3" 
                                     style="max-width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <div class="img-placeholder rounded-circle mb-3" 
                                     style="width: 150px; height: 150px; background-color: #ddd; display: flex; align-items: center; justify-content: center;">
                                    <span>No Image</span>
                                </div>
                            @endif
                            <h3 class="font-weight-bold text-dark">{{ $profil->nama }}</h3>
                            <p><strong>NIM:</strong> {{ $profil->nim }}</p>
                            <p><strong>Bio:</strong> {{ $profil->bio }}</p>
                            <p><strong>Keahlian:</strong> {{ $profil->keahlian }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada data profil.</p>
                @endforelse
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
