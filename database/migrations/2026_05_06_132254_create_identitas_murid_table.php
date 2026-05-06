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
        Schema::create('identitas_murid', function (Blueprint $table) {
        $table->char('KTP', 16)->primary();
        $table->foreignId('murid_id')->constrained('murid', 'murid_id')->onDelete('cascade');
        $table->string('nama_lengkap', 30)->nullable();
        $table->date('tanggal_lahir')->nullable();
        $table->binary('file_ktp')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_murid');
    }
};
