<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GuruSeeder::class, 
            MuridSeeder::class,
            PaketPembelajaranSeeder::class,
            VideoMateriSeeder::class, 
            KuisSeeder::class, 
            AksesPaketSeeder::class,  
            DetailAksesVideoSeeder::class,  
            TransaksiPembelianSeeder::class,
            PembayaranSeeder::class, 
            DetailTransaksiSeeder::class,  
            ProgressBelajarSeeder::class,
        ]);
    }
}