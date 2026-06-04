<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        $mk = [
            'Pemrograman Web',
            'Basis Data',
            'Jaringan Komputer',
            'Sistem Operasi',
            'Struktur Data',
            'Kecerdasan Buatan',
            'Algoritma',
            'Keamanan Jaringan',
            'Pemrograman Mobile',
            'Data Mining'
        ];

        foreach($mk as $index => $nama)
        {
            MataKuliah::create([
                'dosen_id' => rand(1,10),
                'nama_mk' => $nama,
                'sks' => rand(2,4),
            ]);
        }
    }
}