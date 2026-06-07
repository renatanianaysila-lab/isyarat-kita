<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReplyPostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reply_postingan')->insert([
            [
                'postingan_id' => 1,
                'user_id' => 1,
                'isi_reply' => 'Materi dasar memang sebaiknya dipelajari secara bertahap. Coba ulangi bagian alfabet beberapa kali agar gerakannya lebih mudah diingat.',
                'tanggal_reply' => Carbon::now()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 2,
                'user_id' => 2,
                'isi_reply' => 'Tipsnya, kelompokkan huruf yang bentuk gerakannya mirip. Setelah itu latihan menggunakan contoh kata sederhana.',
                'tanggal_reply' => Carbon::now()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 3,
                'user_id' => 1,
                'isi_reply' => 'Bagus, materi percakapan sehari-hari memang penting karena langsung berkaitan dengan komunikasi praktis.',
                'tanggal_reply' => Carbon::now()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 4,
                'user_id' => 3,
                'isi_reply' => 'Ekspresi wajah termasuk bagian penting dalam bahasa isyarat karena dapat memperjelas makna pesan yang disampaikan.',
                'tanggal_reply' => Carbon::now()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'postingan_id' => 5,
                'user_id' => 2,
                'isi_reply' => 'Latihan rutin akan membantu meningkatkan kepercayaan diri. Coba praktikkan dengan teman atau melalui forum diskusi.',
                'tanggal_reply' => Carbon::now()->subDay(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}