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
        Schema::create('reply_postingan', function (Blueprint $table) {
        $table->id('reply_id');
        $table->foreignId('postingan_id')->constrained('postingan', 'postingan_id')->onDelete('cascade');
        $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
        $table->longText('isi_reply');
        $table->timestamp('tanggal_reply')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_postingan');
    }
};
