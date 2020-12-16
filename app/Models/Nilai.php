<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = '1nilai';

    protected $fillable = [
        'id_kategori', 'id_karyawan', 'id_kriteria', 'value'
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
