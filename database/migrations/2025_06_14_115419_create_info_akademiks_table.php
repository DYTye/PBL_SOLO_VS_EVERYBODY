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
        Schema::create('info_akademiks', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_siswa');
            $table->string('jumlah_guru');
            $table->string('jumlah_kelas');
            $table->string('jumlah_prestasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_akademiks');
    }
};
