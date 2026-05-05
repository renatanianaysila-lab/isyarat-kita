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
         Schema::create('video_materi', function (Blueprint $table) {
        $table->id();
        $table->foreignId('paket_id')->constrained('paket')->onDelete('cascade');
        $table->foreignId('guru_id')->constrained('users')->onDelete('cascade');
        $table->string('judul');
        $table->text('deskripsi')->nullable();
        $table->string('url_video');
        $table->integer('durasi_menit')->nullable();
        $table->enum('level', ['dasar', 'menengah', 'lanjutan'])->default('dasar');
        $table->integer('urutan')->default(1);
        $table->boolean('is_terkunci')->default(false);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_materi');
    }
};
