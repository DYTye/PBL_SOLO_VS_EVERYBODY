<?php

namespace App\Models\Guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\GuruFactory;

class Guru extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return GuruFactory::new();
    }

    protected $table = 'gurus';

    protected $fillable = [
        'foto',
        'jabatan',
        'nama',   
    ];

}
