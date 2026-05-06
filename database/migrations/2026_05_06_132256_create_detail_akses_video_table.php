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
        Schema::create('detail_akses_video', function (Blueprint $table) {
        $table->id('detail_akses_id');
        $table->foreignId('video_id')->constrained('video_materi', 'video_id')->onDelete('cascade');
        $table->smallInteger('status_selesai')->default(0);
        $table->timestamp('terakhir_ditonton')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_akses_video');
    }
};
