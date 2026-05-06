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
        Schema::create('kuis', function (Blueprint $table) {
        $table->id('kuis_id');
        $table->foreignId('paket_id')->constrained('paket_pembelajaran', 'paket_id')->onDelete('cascade');
        $table->foreignId('guru_id')->constrained('guru', 'guru_id')->onDelete('cascade');
        $table->string('judul_kuis', 100);
        $table->longText('deskripsi')->nullable();
        $table->integer('durasi_menit')->nullable();
        $table->decimal('nilai_minimum', 5, 2)->default(0);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis');
    }
};
