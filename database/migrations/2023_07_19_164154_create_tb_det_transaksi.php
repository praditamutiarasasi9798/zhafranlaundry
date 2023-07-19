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
        Schema::create('tb_det_transaksi', function (Blueprint $table) {
            $table->id('id_det_transaksi');
            $table->string('kuantitas');
            $table->string('keterangan');
            $table->string('id_transaksi')->references('id_transaksi')->on('transaksi');
            $table->string('id_paket')->references('id_paket')->on('tb_paket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_det_transaksi');
    }
};
