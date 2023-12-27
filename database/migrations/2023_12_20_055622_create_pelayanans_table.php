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
        Schema::create('pelayanans', function (Blueprint $table) {
            $table->id();
            $table->string('nik',20)->required();
            $table->string('nama',100)->required();
            $table->string('tanggalPelayanan',20)->required();
            $table->string('jenisPelayanan',20)->required();
            $table->string('jenisPasien',20)->required();
            $table->string('diagnosa',100)->required();
            $table->string('tb',10)->required();
            $table->string('bb',10)->required();
            $table->string('catatanFisik',100)->required();
            $table->string('catatanDokter',100)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelayanans');
    }
};
