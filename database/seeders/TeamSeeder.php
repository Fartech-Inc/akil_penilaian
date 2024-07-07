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
            [
                'name' => 'TEAM 1 PLN MOBILE - MARKETING AUTOMATION & LOYALTY PROGRAM',
                'category' => 'IMPLEMENTED',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 2 DIGITAL POWER PLANT - DIGITAL TWIN',
                'category' => 'PILOT' ,
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 3 MAPP AND IOT FOR ISOLATED GENERATORS',
                'category' => 'IMPLEMENTED',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 4 SMART CONTROL SYSTEMS',
                'category' => 'PILOT',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 5 SMART GRID DISTRIBUTION - MICROGRID',
                'category' => 'IDEA',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 6 AMI ROADMAP AND FEATURE ENHANCEMENT',
                'category' => 'PILOT',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 7 SUPPLY CHAIN PLANNING AND WAREHOUSE STANDARDIZATION',
                'category' => 'IMPLEMENTED',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 8 GEN AI FOR CUSTOMER SERVICES',
                'category' => 'IDEA',
                'total_score' => 0
            ],
            [
                'name' => 'TEAM 9 SMART SYSTEM PLANNING',
                'category' => 'IDEA',
                'total_score' => 0
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
