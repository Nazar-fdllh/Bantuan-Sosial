<?php

use Illuminate\Support\Facades\Route;
use App\Models\Penerima;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\DistribusiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/distribusi', [DistribusiController::class, 'index'])->name('distribusi.index');


Route::get('/penerima', function () {
    return view('frontend.penerima.index');

});

Route::post('/penerima/store', [PenerimaController::class, 'store'])->name('penerima.store');

Route::get('/penerima', function () {
    $penerima = Penerima::all(); // Ambil semua data dari tabel penerima
    return view('frontend.penerima.index', compact('penerima')); // Tampilkan ke view
})->name('frontend.penerima.index');