<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caraosel extends Model
{
    protected $table='caraosels';
    protected $fillable = [
        'judul',
        'isi',
        'gambar'
    ];
}
