<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = 'bobot';

    protected $primaryKey = 'id_bobot';

    protected $fillable = [
        'id_kriteria', 'id_skala'
    ];

    protected $hidden = [

    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function skala()
    {
        return $this->belongsTo(Skala::class, 'id_skala', 'id_skala');
    }
}
