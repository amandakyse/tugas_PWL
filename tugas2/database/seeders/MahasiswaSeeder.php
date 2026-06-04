<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Amanda',
            'nim' => '2311001',
            'email' => 'amanda@gmail.com'
        ]);

        Mahasiswa::create([
            'nama' => 'Nadia',
            'nim' => '2311002',
            'email' => 'nadia@gmail.com'
        ]);
    }
}