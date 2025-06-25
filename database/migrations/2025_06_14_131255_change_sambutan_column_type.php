<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('sambutan_kepseks', function (Blueprint $table) {
            $table->longText('sambutan')->change(); // Bisa juga ->text() kalau tidak terlalu besar
        });
    }

    public function down(): void {
        Schema::table('sambutan_kepseks', function (Blueprint $table) {
            $table->string('sambutan', 255)->change();
        });
    }
};
