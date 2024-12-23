<?php

use Illuminate\Support\Facades\Route;
use App\Models\Penerima;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\AboutController;
use App\Models\Profil; 
use App\Models\ProgramBantuan;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProgramController;

// Route untuk menampilkan daftar program bantuan
Route::get('/program', [ProgramController::class, 'index'])->name('program');


Route::get('/program-bantuan', [FrontendController::class, 'index'])->name('program-bantuan');

Route::get('/distribusi', [DistribusiController::class, 'index'])->name('frontend.distribusi.index');

Route::get('/about', function () {
    $profils = Profil::all();
    return view('frontend.about.index', compact('profils')); // Sesuaikan path ke file Blade
});
Route::get('/', function () {return view('frontend.penerima.index');});


Route::post('/penerima/store', [PenerimaController::class, 'store'])->name('penerima.store');

Route::get('/penerima', [PenerimaController::class, 'index'])->name('frontend.penerima.index');

Route::get('/program', [FrontendController::class, 'index'])->name('frontend.program.index');

Route::get('/penerima', function () {
    $penerima = Penerima::all(); // Ambil semua data dari tabel penerima
    return view('frontend.penerima.index', compact('penerima')); // Tampilkan ke view
})->name('frontend.penerima.index');