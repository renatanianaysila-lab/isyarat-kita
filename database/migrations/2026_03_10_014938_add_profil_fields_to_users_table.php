<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama_lengkap')->nullable()->after('name');
            $table->date('tanggal_lahir')->nullable()->after('nama_lengkap');
            $table->string('jenis_kelamin')->nullable()->after('tanggal_lahir');
            $table->string('nomor_telepon')->nullable()->after('jenis_kelamin');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nama_lengkap',
                'tanggal_lahir',
                'jenis_kelamin',
                'nomor_telepon',
            ]);
        });
    }
};