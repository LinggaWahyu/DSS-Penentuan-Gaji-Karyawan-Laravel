<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';

    protected $primaryKey = 'id_kriteria';

    protected $fillable = [
        'id_kategori', 'nm_kriteria'
    ];

    protected $hidden = [

    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
