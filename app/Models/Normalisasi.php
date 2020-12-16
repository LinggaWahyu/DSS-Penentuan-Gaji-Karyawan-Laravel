<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    protected $table = '3normalisasi';

    protected $fillable = [
        'id_kategori', 'id_karyawan', 'id_kriteria', 'normalisasi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'id_karyawan');
    }

    public function kriteria()
    {
        return $this->belongsTo(Alternatif::class, 'id_kriteria', 'id_kriteria');
    }
}
