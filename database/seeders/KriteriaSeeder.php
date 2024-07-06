<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriterias = [
            ['name' => 'Kriteria 1'],
            ['name' => 'Kriteria 2'],
            ['name' => 'Kriteria 3'],
            ['name' => 'Kriteria 4'],
            ['name' => 'Kriteria 5'],
        ];

        foreach ($kriterias as $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}
