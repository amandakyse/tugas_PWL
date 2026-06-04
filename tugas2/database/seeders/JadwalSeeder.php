<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        Jadwal::create([
            'mata_kuliah_id' => 1,
            'hari' => 'Senin',
            'jam' => '08:00',
            'ruangan' => 'Lab 1'
        ]);

        Jadwal::create([
            'mata_kuliah_id' => 2,
            'hari' => 'Selasa',
            'jam' => '10:00',
            'ruangan' => 'Lab 2'
        ]);
    }
}