<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    protected $table = 'subkriteria';

    protected $primaryKey = 'id_sub_kriteria';

    protected $fillable = [
        'id_kriteria', 'nama_sub_kriteria', 'value'
    ];

    protected $hidden = [

    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id_kriteria');
    }
}
