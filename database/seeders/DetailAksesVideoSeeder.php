<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailAksesVideoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detail_akses_video')->insert([
            [
                'video_id'          => 1,
                'status_selesai'    => 0,
                'terakhir_ditonton' => null,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}