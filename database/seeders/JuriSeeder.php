<?php

namespace Database\Seeders;

use App\Models\Juri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juris = [
            ['nama' => 'Juri 1'],
            ['nama' => 'Juri 2'],
            ['nama' => 'Juri 3'],
            ['nama' => 'Juri 4'],
            ['nama' => 'Juri 5'],
        ];

        foreach ($juris as $juri) {
            Juri::create($juri);
        }
    }
}
