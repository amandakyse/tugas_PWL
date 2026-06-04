<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        for($i=1; $i<=10; $i++)
        {
            Dosen::create([
                'nama' => fake()->name(),
                'nidn' => '1234'.$i,
                'email' => fake()->unique()->safeEmail(),
            ]);
        }
    }
}