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
        Schema::create('paket_pembelajaran', function (Blueprint $table) {
        $table->id('paket_id');
        $table->foreignId('guru_id')->constrained('guru', 'guru_id')->onDelete('cascade');
        $table->longText('nama_paket');
        $table->longText('deskripsi')->nullable();
        $table->string('mata_pelajaran', 50)->nullable();
        $table->decimal('harga', 12, 2)->default(0);
        $table->integer('durasi_akses_hari')->nullable();
        $table->date('tahun')->nullable();
        $table->string('thumbnail', 50)->nullable();
        $table->string('status_paket', 20)->default('aktif');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_pembelajaran');
    }
};
