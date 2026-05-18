<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketPembelajaranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('paket_pembelajaran')->insert([
            [
                'guru_id'             => 1,
                'nama_paket'          => 'Belajar Bahasa Isyarat Dasar',
                'deskripsi'           => 'Paket belajar bahasa isyarat untuk pemula',
                'mata_pelajaran'      => 'Bahasa Isyarat',
                'harga'               => 0,
                'durasi_akses_hari'   => 30,
                'tahun'               => '2026-01-01',
                'thumbnail'           => null,
                'status_paket'        => 'aktif',
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
        ]);
    }
}