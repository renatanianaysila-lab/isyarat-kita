<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('murid')->insert([
            [
                'user_id'    => 1, // user Murid yang tadi dibuat
                'KTP'        => null,
                'profesi'    => null,
                'alamat'     => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}