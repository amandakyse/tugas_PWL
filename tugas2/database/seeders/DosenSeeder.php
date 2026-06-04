<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create([
            'nama' => 'Budi Santoso',
            'nidn' => '12345',
            'email' => 'budi@gmail.com'
        ]);

        Dosen::create([
            'nama' => 'Siti Aminah',
            'nidn' => '67890',
            'email' => 'siti@gmail.com'
        ]);
    }
}