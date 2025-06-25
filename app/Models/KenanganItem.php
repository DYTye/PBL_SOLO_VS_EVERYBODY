<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KenanganItem extends Model
{

    protected $table = 'kenangan_items';
    protected $fillable = [
        'halaman',
        'kategori',
        'deskripsi',
        'gambar',
        'raport_kenangan_id'
    ];

    public function raport()
{
    return $this->belongsTo(RaportKenangan::class, 'raport_kenangan_id');
}
}
