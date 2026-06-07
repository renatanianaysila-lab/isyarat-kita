<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IdentitasMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('identitas_murid')->insert([
            [
                'KTP' => '6371010101010001',
                'murid_id' => 1,
                'nama_lengkap' => 'Aulia Rahma',
                'tanggal_lahir' => '2005-01-15',
                'file_ktp' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'KTP' => '6371010202020002',
                'murid_id' => 2,
                'nama_lengkap' => 'Bima Pratama',
                'tanggal_lahir' => '2004-08-20',
                'file_ktp' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'KTP' => '6371010303030003',
                'murid_id' => 3,
                'nama_lengkap' => 'Citra Lestari',
                'tanggal_lahir' => '2005-03-10',
                'file_ktp' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'KTP' => '6371010404040004',
                'murid_id' => 4,
                'nama_lengkap' => 'Daffa Maulana',
                'tanggal_lahir' => '2004-11-25',
                'file_ktp' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'KTP' => '6371010505050005',
                'murid_id' => 5,
                'nama_lengkap' => 'Elsa Anindya',
                'tanggal_lahir' => '2005-06-05',
                'file_ktp' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}