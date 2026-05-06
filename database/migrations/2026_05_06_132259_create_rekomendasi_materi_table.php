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
        Schema::create('rekomendasi_materi', function (Blueprint $table) {
        $table->id('rekomendasi_id');
        $table->foreignId('murid_id')->constrained('murid', 'murid_id')->onDelete('cascade');
        $table->foreignId('paket_id')->constrained('paket_pembelajaran', 'paket_id')->onDelete('cascade');
        $table->string('alasan_rekomendasi', 100)->nullable();
        $table->decimal('skor_relevansi', 5, 2)->default(0);
        $table->timestamp('tanggal_rekomendasi')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_materi');
    }
};
