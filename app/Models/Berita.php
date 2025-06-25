<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $fillable = [
        'judul_berita',
        'isi_berita',
        'gambar',
        'kategori_id',
    ];


    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_id');
    }

}