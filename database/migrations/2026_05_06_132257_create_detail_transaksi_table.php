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
         Schema::create('detail_transaksi', function (Blueprint $table) {
        $table->id('detail_id');
        $table->foreignId('transaksi_id')->constrained('transaksi_pembelian', 'transaksi_id')->onDelete('cascade');
        $table->foreignId('paket_id')->constrained('paket_pembelajaran', 'paket_id')->onDelete('cascade');
        $table->decimal('harga_satuan', 12, 2)->default(0);
        $table->integer('jumlah')->default(1);
        $table->decimal('subtotal', 12, 2)->default(0);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
