@extends('layouts.frontend')

@section('title', 'Daftar Distribusi')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Distribusi</h1>
    <table class="table table-hover table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>#</th>
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
@endsection
