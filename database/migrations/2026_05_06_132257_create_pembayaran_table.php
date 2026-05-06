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
        Schema::create('pembayaran', function (Blueprint $table) {
        $table->id('pembayaran_id');
        $table->foreignId('transaksi_id')->constrained('transaksi_pembelian', 'transaksi_id')->onDelete('cascade');
        $table->string('metode_pembayaran', 30)->nullable();
        $table->decimal('jumlah_bayar', 12, 2)->default(0);
        $table->string('status_pembayaran', 20)->default('pending');
        $table->timestamp('tanggal_bayar')->nullable();
        $table->string('bukti_pembayaran', 100)->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
