<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Tampilkan halaman About.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Kirim data untuk halaman About (bisa ditambah dengan informasi programmer)
        return view('frontend.about.index');
    }
}
