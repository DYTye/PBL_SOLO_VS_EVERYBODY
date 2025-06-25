<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Siswa\Siswa;
use App\Models\Siswa\orangtua;
use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;


use Illuminate\Support\Facades\DB;
use Database\Seeders\KategoriBeritaSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            KategoriBeritaSeeder::class,
        ]);

        DB::table('kelas')->insert([
            ['nama' => 'A'],
            ['nama' => 'B1'],
            ['nama' => 'B2'],
            ['nama' => 'B3'],
            ['nama' => 'B4'],
            ['nama' => 'B5'],
            ['nama' => 'B6'],
        ]);
    }
    
}
