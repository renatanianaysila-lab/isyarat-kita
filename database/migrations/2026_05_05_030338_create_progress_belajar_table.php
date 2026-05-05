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
        Schema::create('progress_belajar', function (Blueprint $table) {
        $table->id();
        $table->foreignId('murid_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('video_id')->constrained('video_materi')->onDelete('cascade');
        $table->enum('status', ['belum', 'sedang_ditonton', 'selesai', 'terhenti'])->default('belum');
        $table->integer('durasi_ditonton')->default(0);
        $table->timestamp('terakhir_ditonton')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_belajar');
    }
};
