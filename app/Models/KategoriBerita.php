<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    //

    public function beritas()
{
    return $this->hasMany(Berita::class, 'kategori_id');
}
}

