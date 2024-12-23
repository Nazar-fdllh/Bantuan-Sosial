<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerima;

class PenerimaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'alamat' => 'required|string',
            'no_hp' => 'nullable|string|max:15',
        ]);

        Penerima::create($request->all());

        
        return redirect()->route('frontend.penerima.index')->with('success', 'Penerima berhasil ditambahkan!');
        
    }
    
}