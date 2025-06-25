<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiodataSekolah extends Model
{
    protected $table = 'biodata_sekolahs';
    protected $fillable = [
        'nama_sekolah',
        'nomor_statistik_sekolah',
        'nomor_identitas_sekolah',
        'NPSN',
        'alamat',
        'kelurahan',
        'kecamatan',       
        'kota',               
        'provinsi',            
        'kode_pos',     
        'status',            
        'kelompok_tk',        
        'akreditasi',         
        'tahun_berdiri',       
        'tahun_diresmikan',      
        'kegiatan_belajar',
    ];
}
