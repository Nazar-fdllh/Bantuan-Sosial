@extends('layouts.frontend')

@section('title', 'Sistem Informasi Bantuan Sosial')

@section('content')
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('assets/images/logo.png')}}" alt="" />
            <span>
              Sistem Informasi Bantuan Sosial
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">
                    Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/about') }}"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/distribusi') }}"> Distribusi </a>
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
                    <a href="#" onclick="window.scrollTo({top: document.body.scrollHeight, behavior: 'smooth'});" class="btn-1">
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

  <!-- offer section -->

  <section id="offer-section" class="offer_section hero_next_section-margin layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Program Bantuan
        </h2>
        <p>
          ujuan dari halaman ini adalah untuk memberikan informasi yang jelas dan mudah dipahami mengenai berbagai program bantuan 
          yang dapat diakses oleh masyarakat. Dengan informasi yang terstruktur dengan baik, pengunjung dapat dengan mudah menemukan 
          rincian mengenai syarat, cara pendaftaran, serta manfaat yang bisa didapatkan dari setiap program bantuan.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="{{ asset('assets/images/pkh.png') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
            </div>
            <div class="detail-box">
              
              <h6>
                Program Keluarga Harapan
              </h6>
              <p>
                Program bantuan sosial bersyarat yang diberikan kepada keluarga miskin untuk meningkatkan kualitas sumber daya manusia.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box" style="width: 100%; max-width: 600px; overflow: hidden;">
              <img src="{{ asset('assets/images/blt.jpg') }}" 
                   alt="" 
                   class="img-fluid mb-3" 
                   style="width: auto; height: auto;">
          </div>
          
            <div class="detail-box">
              <h6>
                Bantuan Langsung Tunai
              </h6>
              <p>
                Program bantuan langsung berupa uang tunai yang diberikan kepada masyarakat terdampak.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="{{ asset('assets/images/sembako-removebg-preview.png') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
            </div>
            <div class="detail-box">
              <h6>
                Program Sembako
              </h6>
              <p>
                Program untuk memberikan bantuan bahan pangan pokok kepada masyarakat yang membutuhkan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="{{ asset('assets/images/bangtuan sekolah.jpg') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
            </div>
            <div class="detail-box">
              <h6>
                Bantuan Pendidikan
              </h6>
              <p>
                Program bantuan biaya pendidikan bagi anak dari keluarga kurang mampu.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="{{ asset('assets/images/5.jpg') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
            </div>
            <div class="detail-box">
              <h6>
                Bantuan Usaha Mikro
              </h6>
              <p>
                Program bantuan dana bagi pelaku usaha mikro untuk mendukung keberlangsungan usaha mereka.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <img src="{{ asset('assets/images/rumah.jpg') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
              </div>
            <div class="detail-box">
              <h6>
                Bantuan Rumah Layak Huni
              </h6>
              <p>
                Program ini membantu renovasi atau pembangunan rumah layak huni bagi masyarakat miskin. 
                Penerima bantuan diprioritaskan kepada keluarga yang tinggal di rumah tidak layak huni atau area rawan bencana. 
                Program ini melibatkan partisipasi masyarakat setempat dalam pelaksanaannya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

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
                <form action="{{ route('penerima.store') }}" method="POST">
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
                    <div class="d-flex mt-4 justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            Tambah Penerima
                        </button>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success mt-3 text-center" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
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
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 All Rights Reserved 
      <a href="https://html.design/"> UAS DESAIN WEB 2024</a>
    </p>
  </section>
  <!-- footer section -->

  <!-- resources/views/welcome.blade.php -->
  <head><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></head>
  <script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>


  <!-- google map js -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

 


@endsection
