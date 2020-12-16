<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    protected $primaryKey = 'id_karyawan';

    protected $fillable = [
        'nama_karyawan', 'alamat', 'tanggal_lahir', 'no_telp'
    ];

    protected $hidden = [

    ];
}
