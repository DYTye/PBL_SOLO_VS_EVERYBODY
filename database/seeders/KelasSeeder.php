<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
