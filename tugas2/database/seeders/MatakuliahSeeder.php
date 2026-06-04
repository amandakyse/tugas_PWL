<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        MataKuliah::create([
            'dosen_id' => 1,
            'nama_mk' => 'Pemrograman Web',
            'sks' => 3
        ]);

        MataKuliah::create([
            'dosen_id' => 2,
            'nama_mk' => 'Basis Data',
            'sks' => 3
        ]);
    }
}