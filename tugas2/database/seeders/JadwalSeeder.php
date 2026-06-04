<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        $hari = ['Senin','Selasa','Rabu','Kamis','Jumat'];

        for($i=1; $i<=15; $i++)
        {
            Jadwal::create([
                'mata_kuliah_id' => rand(1,10),
                'hari' => $hari[array_rand($hari)],
                'jam' => rand(7,15).':00',
                'ruangan' => 'Lab '.rand(1,5),
            ]);
        }
    }
}