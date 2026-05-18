<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('guru')->insert([
            [
                'user_id'      => 2,
                'nama'         => 'Guru',
                'spesialisasi' => null,
                'pengalaman'   => null,
                'rating'       => 0,
                'sertifikat'   => null,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}