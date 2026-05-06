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
        $table->id('progress_id');
        $table->foreignId('murid_id')->constrained('murid', 'murid_id')->onDelete('cascade');
        $table->integer('progress_persen')->default(0);
        $table->integer('video_ditonton')->default(0);
        $table->integer('total_video')->default(0);
        $table->decimal('skor_kuis', 5, 2)->default(0);
        $table->timestamp('last_watch')->nullable();
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
