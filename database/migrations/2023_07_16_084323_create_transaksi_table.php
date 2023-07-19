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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->string('kode_invoice');
            $table->date('tanggal_transaksi');
            $table->string('batas_waktu');
            $table->date('tanggal_bayar');
            $table->string('biaya_tambahan');
            $table->string('status_transaksi');
            $table->string('status_bayar');
            // $table->string('nama_customer')->index();
            $table->string('id_customer')->references('id_customer')->on('tb_customer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
