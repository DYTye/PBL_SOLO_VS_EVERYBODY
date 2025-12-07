<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa\Siswa;
use App\Models\Siswa\orangtua;
use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\KategoriBeritaSeeder;
use App\Models\SambutanKepsek; // ⭐ Pastikan ini di-import

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Panggil Seeder lain
        $this->call([
            KategoriBeritaSeeder::class,
            // GuruSeeder::class, // Jika ini adalah seeder kamu, bisa ditambahkan
        ]);

        // Insert data statis
        DB::table('kelas')->insert([
            ['nama' => 'A'],
            ['nama' => 'B1'],
            ['nama' => 'B2'],
            ['nama' => 'B3'],
            ['nama' => 'B4'],
            ['nama' => 'B5'],
            ['nama' => 'B6'],
        ]);

        // ⭐ Panggil Factory SambutanKepsek
        // Menggunakan Model langsung karena sudah di-import
        SambutanKepsek::factory(1)->create(); 
        
        // Contoh membuat user dan data lainnya:
        // User::factory(10)->create();
    }
}