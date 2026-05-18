<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuisSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kuis')->insert([
            [
                'paket_id'      => 1,
                'guru_id'       => 1,
                'judul_kuis'    => 'Kuis Bahasa Isyarat Dasar',
                'deskripsi'     => 'Kuis untuk menguji pemahaman dasar bahasa isyarat',
                'durasi_menit'  => 30,
                'nilai_minimum' => 60,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}