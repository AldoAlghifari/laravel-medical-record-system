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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nik',20)->required();
            $table->string('nama',100)->required();
            $table->string('tanggalLahir',50)->required();
            $table->string('umur',50)->required();
            $table->string('jenisKelamin',20)->required();
            $table->string('alamat',100)->required();
            $table->string('noKk',20)->required();
            $table->string('namaOrtu',100)->required();
            $table->string('golDarah',2)->nullable();
            $table->string('noHp',20)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
