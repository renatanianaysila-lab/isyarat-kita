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
        Schema::create('murid', function (Blueprint $table) {
        $table->id('murid_id');
        $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
        $table->char('KTP', 16)->nullable();
        $table->string('profesi', 20)->nullable();
        $table->longText('alamat')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
