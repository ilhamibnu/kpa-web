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
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kategori_pelaporan');
            $table->foreign('id_kategori_pelaporan')->references('id')->on('kategori_pelaporan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->dropForeign(['id_kategori_pelaporan']);
            $table->dropColumn('id_kategori_pelaporan');
        });
    }
};
