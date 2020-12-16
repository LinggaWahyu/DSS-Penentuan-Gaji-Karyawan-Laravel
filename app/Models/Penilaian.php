<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';

    protected $primaryKey = 'id_penilaian';

    protected $fillable = [
        'id_karyawan', 'id_kategori', 'id_kriteria', 'id_sub_kriteria'
    ];

    protected $hidden = [

    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'id_karyawan');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function subkriteria()
    {
        return $this->belongsTo(Subkriteria::class, 'id_sub_kriteria', 'id_sub_kriteria');
    }
}
