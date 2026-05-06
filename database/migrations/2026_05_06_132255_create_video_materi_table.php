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
        $table->id('video_id');
        $table->foreignId('paket_id')->constrained('paket_pembelajaran', 'paket_id')->onDelete('cascade');
        $table->foreignId('guru_id')->constrained('guru', 'guru_id')->onDelete('cascade');
        $table->string('judul_video', 50);
        $table->longText('deskripsi')->nullable();
        $table->string('url_video', 50);
        $table->string('video_materi', 50)->nullable();
        $table->integer('durasi_video')->nullable();
        $table->integer('urutan_video')->default(1);
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
