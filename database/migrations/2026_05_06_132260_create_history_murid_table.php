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
        Schema::create('history_murid', function (Blueprint $table) {
        $table->id('riwayat_id');
        $table->foreignId('murid_id')->constrained('murid', 'murid_id')->onDelete('cascade');
        $table->timestamp('last_watch')->nullable();
        $table->smallInteger('status_selesai')->default(0);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_murid');
    }
};
