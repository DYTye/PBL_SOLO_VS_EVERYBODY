<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahunajar extends Model
{
    protected $table = 'tahun_ajars';
    protected $fillable = [
        'nama_tahun_ajar',
        'semester',
        'status'
    ];
}
