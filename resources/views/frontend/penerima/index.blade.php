@extends('layouts.frontend')

@section('title', 'Sistem Informasi Bantuan Sosial')

@section('content')
<div class="hero_area">
  <!-- header section strats -->
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
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">
                  Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/distribusi') }}"> Distribusi </a>
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
  <!-- end header section -->
  <!-- slider section -->
  <section class=" slider_section position-relative">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Informasi Bantuan <br />
                    <span>
                      Untuk Masa depan yang terjamin
                    </span>
                  </h1>
                  <p>
                    "Sistem kami membantu menghubungkan mereka yang membutuhkan dengan sumber daya yang tepat."

                  </p>
                  <div class="btn-box">
                    <a href="#" onclick="window.scrollTo({top: document.body.scrollHeight, behavior: 'smooth'});"
                      class="btn-1">
                      Tambah Penerima
                    </a>
                    <a href="{{ route('frontend.distribusi.index') }}" class="btn-2">
                      Lihat Distribusi
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Informasi Bantuan <br />
                    <span>
                      Tangguh semangat
                    </span>
                  </h1>
                  <p>
                    Bantuan sosial hadir dalam berbagai bentuk untuk
                    memenuhi kebutuhan masyarakat. Jenis-jenis bantuan sosial
                    meliputi bantuan pangan, kesehatan, pendidikan, ekonomi, dan lainnya.
                    Setiap jenis bantuan dirancang untuk mendukung kesejahteraan dan kemajuan
                    masyarakat.
                  </p>
                  <div class="btn-box">
                    <a href="#offer-section" class="btn-1">
                      Program Bantuan
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end slider section -->
</div>

<!--program-->
@section('program')
<section id="offer-section" class="offer_section hero_next_section-margin layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Program Bantuan</h2>
      <p>
        Tujuan dari halaman ini adalah untuk memberikan informasi yang jelas dan mudah dipahami mengenai berbagai
        program bantuan
        yang dapat diakses oleh masyarakat. Dengan informasi yang terstruktur dengan baik, pengunjung dapat dengan mudah
        menemukan
        rincian mengenai syarat, cara pendaftaran, serta manfaat yang bisa didapatkan dari setiap program bantuan.
      </p>
    </div>
    <div class="row">
      <!-- Program 1 -->
      <div class="col-md-6">
        <div class="content-box">
          <div class="img-box">
            <a href="{{ url('/program') }}">
              <img src="{{ asset('assets/images/Bantuan Santunan.jpg') }}" alt="" class="img-fluid mb-3">
            </a>
          </div>
          <div class="detail-box">
            <h6>Program Santunan Keluargan</h6>
            <p>Program bantuan sosial bersyarat yang diberikan kepada keluarga miskin.</p>
          </div>
        </div>
      </div>

      <!-- Program 2 -->
      <div class="col-md-6">
        <div class="content-box">
          <div class="img-box" style="width: 100%; max-width: 600px; overflow: hidden;">
            <a href="{{ url('/program') }}">
              <img src="{{ asset('assets/images/BLT.jpg') }}" alt="" class="img-fluid mb-3"
                style="width: auto; height: auto;">
            </a>
          </div>
          <div class="detail-box">
            <h6>Bantuan Langsung Tunai</h6>
            <p>Program bantuan langsung berupa uang tunai yang diberikan kepada masyarakat terdampak.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tombol Lihat Semua -->
    <div class="text-center mt-4">
      <a href="{{ url('/program') }}" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px;">Lihat
        Semua</a>
    </div>
  </div>
</section>




<!-- end program -->

<!-- about section -->
<!-- end about section -->

<!-- client section -->
<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Tambah Penerima Untuk Request Bantuan</h2>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="{{ route('penerima.store') }}" method="POST" id="form-tambah-penerima">
          @csrf
          <div class="mb-3">
            <input type="text" name="nama" placeholder="Nama" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="text" name="nik" placeholder="NIK" class="form-control" required>
          </div>
          <div class="mb-3">
            <textarea name="alamat" placeholder="Alamat" class="form-control" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <input type="text" name="no_hp" placeholder="Nomor HP" class="form-control">
          </div>
          <div class="mb-3">
            <textarea name="deskripsi" placeholder="Program Yang dipilih" class="form-control" rows="3"></textarea>
          </div>
          <div class="d-flex mt-4 justify-content-center">
            <button type="submit" class="btn btn-primary">
              Tambah Penerima
            </button>
          </div>
        </form>
        @if (session('success'))
      <script>
        document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          confirmButtonText: 'OK'
        });
        });
      </script>
    @endif
      </div>
    </div>
  </div>
</section>


@endsection
<script>
  // Auto-hide success alert after 5 seconds
  document.addEventListener('DOMContentLoaded', function () {
    const alert = document.getElementById('success-alert');
    if (alert) {
      setTimeout(() => {
        alert.style.display = 'none';
      }, 5000);
    }
  });
</script>

<div class="col-md-6">
  <!-- map section -->
  <div class="map_section">
    <div id="map" class="w-100 h-100"></div>
  </div>

  <!-- end map section -->
</div>
</div>
</div>
</section>

<!-- end contact section -->


<!-- info section -->


<!-- end info_section -->

<!-- footer section -->

<!-- footer section -->

<!-- resources/views/welcome.blade.php -->

<head>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- google map js -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
</script>
<!-- end google map js -->

@endsection