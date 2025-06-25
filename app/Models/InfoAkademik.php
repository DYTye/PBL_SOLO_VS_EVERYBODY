<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoAkademik extends Model
{
    protected $table = 'info_akademiks';
    protected $fillable = [
        'jumlah_siswa',
        'jumlah_guru',
        'jumlah_kelas',
        'jumlah_prestasi'
    ];
}
