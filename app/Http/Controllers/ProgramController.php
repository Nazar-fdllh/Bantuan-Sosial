<?php

namespace App\Http\Controllers;

use App\Models\ProgramBantuan; // Pastikan model ProgramBantuan sudah ada
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    // Fungsi untuk menampilkan daftar program bantuan
    public function index()
    {
        // Mengambil semua data program bantuan dari database
        $program_bantuan = ProgramBantuan::all();

        // Mengirimkan data program_bantuan ke view 'frontend.program'
        return view('frontend.program', compact('program_bantuan'));
    }
}
