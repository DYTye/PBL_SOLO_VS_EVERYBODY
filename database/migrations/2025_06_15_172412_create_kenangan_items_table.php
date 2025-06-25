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
        Schema::create('kenangan_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('raport_kenangan_id')->constrained('raport_kenangans')->onDelete('cascade');
            $table->string('gambar');
            $table->longText('deskripsi')->nullable();
            $table->enum('kategori', ['cover','siswa','guru','isi'])->default('isi');
            $table->integer('halaman')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kenangan_items');
    }
};
