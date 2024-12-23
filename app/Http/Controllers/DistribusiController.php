<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Distribusi;

class DistribusiController extends Controller
{
    public function index()
    {
        $distribusi = Distribusi::with(['penerima', 'programBantuan'])->get();
        $penerima = Penerima::all();

        
        return view('frontend.distribusi.index', compact('distribusi', 'penerima'));

    }
}
