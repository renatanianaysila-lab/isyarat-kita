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
        $table->id();
        $table->foreignId('paket_id')->constrained('paket')->onDelete('cascade');
        $table->string('judul_kuis');
        $table->text('deskripsi')->nullable();
        $table->integer('durasi_menit')->default(30);
        $table->integer('passing_score')->default(70);
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
