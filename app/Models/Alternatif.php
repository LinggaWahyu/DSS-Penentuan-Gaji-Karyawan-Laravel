<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'alternatif';

    protected $primaryKey = 'id_alternatif';

    protected $fillable = [
        'gaji_pokok', 'gajibonus', 'gajitunjangan'
    ];

    protected $hidden = [

    ];
}
