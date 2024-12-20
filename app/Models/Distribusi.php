<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    use HasFactory;

    protected $table = 'distribusi';

    // Kolom yang bisa diisi melalui mass assignment
    protected $fillable = ['penerima_id', 'program_bantuan_id', 'tanggal_distribusi', 'status'];
    
    protected $casts = [
        'tanggal_distribusi' => 'date', // atau gunakan 'datetime' jika ingin menyertakan waktu
    ];

    // Relasi ke model Penerima
    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'penerima_id', 'id');
    }

    // Relasi ke model ProgramBantuan
    public function programBantuan()
    {
        return $this->belongsTo(ProgramBantuan::class, 'program_bantuan_id', 'id');
    }
}
