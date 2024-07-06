<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['name' => 'Team A', 'total_score' => 0],
            ['name' => 'Team B', 'total_score' => 0],
            ['name' => 'Team C', 'total_score' => 0],
            ['name' => 'Team D', 'total_score' => 0],
            ['name' => 'Team E', 'total_score' => 0],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
