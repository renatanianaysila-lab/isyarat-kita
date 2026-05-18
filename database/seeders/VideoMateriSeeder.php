<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoMateriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('video_materi')->insert([
            [
                'paket_id'     => 1,
                'guru_id'      => 1,
                'judul_video'  => 'Pengenalan Bahasa Isyarat',
                'deskripsi'    => 'Video pengenalan dasar bahasa isyarat',
                'url_video'    => 'https://youtube.com/example',
                'video_materi' => null,
                'durasi_video' => 10,
                'urutan_video' => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}