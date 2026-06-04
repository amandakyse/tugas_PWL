<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KRS;

class KrsSeeder extends Seeder
{
    public function run(): void
    {
        for($i=1; $i<=30; $i++)
        {
            KRS::create([
                'mahasiswa_id' => rand(1,20),
                'jadwal_id' => rand(1,15),
                'semester' => rand(1,8),
            ]);
        }
    }
}