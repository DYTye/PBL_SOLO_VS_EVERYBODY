<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RaportKenangan extends Model
{
    protected $table = 'raport_kenangans';
    protected $fillable = [
        'judul',
        'kelas_id',
        'tahun_ajar_id'
    ];
    
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
    public function tahunajar(): BelongsTo
    {
        return $this->belongsTo(Tahunajar::class, 'tahun_ajar_id');
    }
    public function items()
{
    return $this->hasMany(KenanganItem::class, 'raport_kenangan_id');
}
    
}
