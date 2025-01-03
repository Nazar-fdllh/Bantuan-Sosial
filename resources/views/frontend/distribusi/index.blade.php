@extends('layouts.frontend')

@section('title', 'Daftar Distribusi Bantuan')

@section('content')

<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('assets/images/logo.png')}}" alt="" />
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
                                Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/about') }}">
                                About 
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/distribusi') }}">
                                Distribusi <span class="sr-only"></span>
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

<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Distribusi</h1>
    <table class="table table-hover table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Nama Penerima</th>
                <th>Program Bantuan</th>
                <th>Tanggal Distribusi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distribusi as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->penerima->nama }}</td>
                    <td>{{ $item->programBantuan->nama_program }}</td>
                    <td>{{ $item->tanggal_distribusi->format('d/m/Y') }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Penerima</h2>
    <table class="table table-hover table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Program yang dipilih</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerima as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp ?? '-' }}</td>
                    <td>{{ $item->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<head><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></head>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>

@endsection
