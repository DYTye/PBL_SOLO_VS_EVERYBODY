<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            
            $table->foreign('kategori_id')->references('id')->on('kategori_beritas')->onDelete('set null');
        });
    }
    
    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->dropColumn('kategori_id');
        });
    }
    
};
