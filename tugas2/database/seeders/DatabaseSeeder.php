<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DosenSeeder;
use Database\Seeders\MahasiswaSeeder;
use Database\Seeders\MataKuliahSeeder;
use Database\Seeders\JadwalSeeder;
use Database\Seeders\KrsSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        DosenSeeder::class,
        MahasiswaSeeder::class,
        MataKuliahSeeder::class,
        JadwalSeeder::class,
        KrsSeeder::class,
    ]);
}
    
}
