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
        Schema::create('akses_paket', function (Blueprint $table) {
        $table->id('akses_id');
        $table->foreignId('murid_id')->constrained('murid', 'murid_id')->onDelete('cascade');
        $table->foreignId('paket_id')->constrained('paket_pembelajaran', 'paket_id')->onDelete('cascade');
        $table->date('tanggal_mulai')->nullable();
        $table->date('tanggal_berakhir')->nullable();
        $table->string('status_akses', 20)->default('aktif');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akses_paket');
    }
};
