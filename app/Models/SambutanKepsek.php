<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ⭐ PASTIKAN BARIS INI ADA
use Illuminate\Database\Eloquent\Model;

class SambutanKepsek extends Model
{
    // ⭐ PASTE JUGA BARIS INI KE DALAM CLASS
    use HasFactory; 

    protected $table = 'sambutan_kepseks'; // Sesuaikan dengan nama tabel kamu

    protected $fillable = [
        'sambutan',
        // Tambahkan kolom lain di sini
    ];
}