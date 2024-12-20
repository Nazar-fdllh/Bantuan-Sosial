@extends('layouts.frontend')

@section('title', 'Daftar Penerima')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Penerima</h1>

   <!-- Tombol Tambah Penerima -->
<div class="d-flex justify-content-between mb-3">
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPenerimaModal">
            Tambah Penerima
        </button>
        <a href="{{ route('distribusi.index') }}" class="btn btn-info">Lihat Distribusi</a>
    </div>
    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#programmersBioModal">
        Lihat Biodata Programmer
    </button>
</div>

<!-- Modal Biodata Programmer -->
<div class="modal fade" id="programmersBioModal" tabindex="-1" aria-labelledby="programmersBioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="programmersBioModalLabel">Biodata Programmer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Biodata Programmer 1 -->
                <h5>Programmer 1</h5>
                <p><strong>Nama:</strong> [Nama Programmer 1]</p>
                <p><strong>Email:</strong> [Email Programmer 1]</p>
                <p><strong>Nomor Telepon:</strong> [Nomor Telepon Programmer 1]</p>
                <p><strong>Alamat:</strong> [Alamat Programmer 1]</p>
                <p><strong>Keahlian:</strong> Laravel, PHP, JavaScript, MySQL</p>
                <p><strong>Pengalaman:</strong> 3+ Tahun dalam pengembangan aplikasi web.</p>

                <hr>

                <!-- Biodata Programmer 2 -->
                <h5>Programmer 2</h5>
                <p><strong>Nama:</strong> [Nama Programmer 2]</p>
                <p><strong>Email:</strong> [Email Programmer 2]</p>
                <p><strong>Nomor Telepon:</strong> [Nomor Telepon Programmer 2]</p>
                <p><strong>Alamat:</strong> [Alamat Programmer 2]</p>
                <p><strong>Keahlian:</strong> Laravel, React, Node.js, MongoDB</p>
                <p><strong>Pengalaman:</strong> 4+ Tahun dalam pengembangan aplikasi web.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


    
    

    <!-- Tabel Daftar Penerima -->
    <table class="table table-hover table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Tambah Penerima -->
<div class="modal fade" id="addPenerimaModal" tabindex="-1" aria-labelledby="addPenerimaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('penerima.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPenerimaModalLabel">Tambah Penerima</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if (session('success'))
<!-- Modal Popup -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="successModalLabel">Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endif

@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    });
</script>
@endif


@endsection
