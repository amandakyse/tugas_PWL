<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Krs;

class KrsSeeder extends Seeder
{
    public function run(): void
    {
        Krs::create([
            'mahasiswa_id' => 1,
            'jadwal_id' => 1,
            'semester' => '4'
        ]);

        Krs::create([
            'mahasiswa_id' => 2,
            'jadwal_id' => 2,
            'semester' => '4'
        ]);
    }
}