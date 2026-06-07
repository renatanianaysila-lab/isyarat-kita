<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MediaPostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media_postingan')->insert([
            [
                'postingan_id' => 1,
                'url_media' => 'media/postingan/postingan-1.jpg',
                'tipe_media' => 'image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 2,
                'url_media' => 'media/postingan/postingan-2.jpg',
                'tipe_media' => 'image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 3,
                'url_media' => 'media/postingan/postingan-3.mp4',
                'tipe_media' => 'video',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 4,
                'url_media' => 'media/postingan/postingan-4.jpg',
                'tipe_media' => 'image',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 5,
                'url_media' => 'media/postingan/postingan-5.mp4',
                'tipe_media' => 'video',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}