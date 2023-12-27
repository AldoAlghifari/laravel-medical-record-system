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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('kodeObat',10)->required();
            $table->string('nama',50)->required();
            $table->string('jenisObat',50)->required();
            $table->string('tanggalMasuk',50)->required();
            $table->string('pengirim',50)->required();
            $table->string('penerima',50)->required();
            $table->string('catatan',50)->required();
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
