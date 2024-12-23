<?php

use App\Models\Profil; // Pastikan namespace ini ada

class AboutController extends Controller
{
    public function index()
    {
        $profils = Profil::all(); // Mengambil semua data dari tabel 'profils'
        return view('about', compact('profils'));
    }
}
