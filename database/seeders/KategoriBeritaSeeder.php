<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\KategoriBerita;

class KategoriBeritaSeeder extends Seeder
{
    public function run()
    {
        $kategoris = [
            'Pengumuman',
            'Kegiatan',
            'Prestasi',
            'Info TK',
        ];

        foreach ($kategoris as $kategori) {
            KategoriBerita::create([
                'kategori' => $kategori
            ]);
        }
    }
}
