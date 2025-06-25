<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodata_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('nomor_statistik_sekolah')->nullable();
            $table->string('nomor_identitas_sekolah')->nullable();
            $table->string('NPSN')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();          // Payakumbuh Barat
            $table->string('kota')->nullable();                // Payakumbuh
            $table->string('provinsi')->nullable();            // Sumatera Barat
            $table->string('kode_pos', 10)->nullable();        // 26226
            $table->string('status')->nullable();              // Swasta
            $table->string('kelompok_tk')->nullable();         // TK Inti
            $table->string('akreditasi')->nullable();          // B
            $table->year('tahun_berdiri')->nullable();         // Kosong
            $table->date('tahun_diresmikan')->nullable();      // 1971-01-06
            $table->string('kegiatan_belajar')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_sekolahs');
    }
};
