<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelebihanSekolah extends Model
{
    protected $table = 'kelebihan_sekolahs';
    protected $fillable = [
        'kelebihan',
        'gambar'
    ];
}
