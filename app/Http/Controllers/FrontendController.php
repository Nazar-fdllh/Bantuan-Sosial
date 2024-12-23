<?php
namespace App\Http\Controllers;

use App\Models\ProgramBantuan;

class FrontendController extends Controller
{

    public function index()
    {
        // Ambil data program bantuan dari database
        $program_bantuan = ProgramBantuan::all(); 

        // Kirim data ke view
        return view('frontend.program.index', compact('program_bantuan'));
    }
   
}
