@extends('layouts.frontend')

@section('title', 'Sistem Informasi Bantuan Sosial')


@section('program')

<section id="offer-section" class="offer_section hero_next_section-margin layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Program Bantuan
        </h2>
        <p>
          Tujuan dari halaman ini adalah untuk memberikan informasi yang jelas dan mudah dipahami mengenai berbagai program bantuan 
          yang dapat diakses oleh masyarakat. Dengan informasi yang terstruktur dengan baik, pengunjung dapat dengan mudah menemukan 
          rincian mengenai syarat, cara pendaftaran, serta manfaat yang bisa didapatkan dari setiap program bantuan.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="content-box">
          <div class="img-box" style="width: 100%; max-width: 600px; overflow: hidden;">
        <a href="https://kemensos.go.id/">
          <img src="{{ asset('assets/images/pkh.png') }}" 
                alt="" 
                class="img-fluid mb-3" 
                style="width: auto; height: auto;">
        </a>
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
              <a href="https://kemensos.go.id/">
              <img src="{{ asset('assets/images/blt.jpg') }}" 
                    alt="" 
                    class="img-fluid mb-3" 
                    style="width: auto; height: auto;">
                    </a>
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
              <a href="https://kemensos.go.id/">
              <img src="{{ asset('assets/images/sembako-removebg-preview.png') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
              </a>
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
              <a href="https://kemensos.go.id/">
              <img src="{{ asset('assets/images/bangtuan sekolah.jpg') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
              </a>
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
              <a href="https://kemensos.go.id/">
              <img src="{{ asset('assets/images/5.jpg') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
              </a>
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
              <a href="https://kemensos.go.id/">
              <img src="{{ asset('assets/images/rumah.jpg') }}" alt=""
              class="img-fluid mb-3" 
              style="max-width: auto; height: auto;">
              </a>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- google map js -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

 


@endsection
