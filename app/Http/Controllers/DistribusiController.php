<?php

namespace App\Http\Controllers;

use App\Models\Distribusi;
use Illuminate\Http\Request;

class DistribusiController extends Controller
{
    public function index()
    {
        $distribusi = Distribusi::with(['penerima', 'programBantuan'])->get();
        return view('frontend.distribusi.index', compact('distribusi'));
    }
}

