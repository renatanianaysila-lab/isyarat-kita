<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressBelajarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('progress_belajar')->insert([
            [
                'murid_id'        => 1,
                'progress_persen' => 0,
                'video_ditonton'  => 0,
                'total_video'     => 0,
                'skor_kuis'       => 0,
                'last_watch'      => null,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
        ]);
    }
}