<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skala extends Model
{
    protected $table = 'skala';

    protected $primaryKey = 'id_skala';

    protected $fillable = [
        'nm_skala', 'value'
    ];

    protected $hidden = [

    ];
}
