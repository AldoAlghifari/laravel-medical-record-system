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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100)->required();
            $table->string('tanggalPembayaran',20)->required();
            $table->string('metodeBayar',20)->required();
            $table->string('nomorKartu',20)->required();
            $table->string('totalTagihan',100)->required();
            $table->string('jumlahDibayar',10)->required();
            $table->string('sisaTagihan',10)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
