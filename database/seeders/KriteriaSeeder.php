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
            ['name' => 'Impact', 'desc' => ''],
            ['name' => 'Use Case', 'desc' => ''],
            ['name' => 'Technology Platforms', 'desc' => ''],
            ['name' => 'Organization/enablers', 'desc' => ''],
            ['name' => 'X-Factor', 'desc' => ''],
        ];

        foreach ($kriterias as $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}
