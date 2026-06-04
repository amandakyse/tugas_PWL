<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        for($i=1; $i<=20; $i++)
        {
            Mahasiswa::create([
                'nama' => fake()->name(),
                'nim' => '2311'.str_pad($i,3,'0',STR_PAD_LEFT),
                'email' => fake()->unique()->safeEmail(),
            ]);
        }
    }
}