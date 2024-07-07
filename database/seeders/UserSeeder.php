<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juries = [
            ['name' => 'Juri 1 Alberto', 'email' => 'juri1@gmail.com', 'password' => 'Juri001!'],
            ['name' => 'Juri 2 Marcopolo', 'email' => 'juri2@gmail.com', 'password' => 'Juri002!'],
            ['name' => 'Juri 3 Magello', 'email' => 'juri3@gmail.com', 'password' => 'Juri003!'],
            ['name' => 'Juri 4 Tepro', 'email' => 'juri4@gmail.com', 'password' => 'Juri004!'],
            ['name' => 'Juri 5 Anjelloli', 'email' => 'juri5@gmail.com', 'password' => 'Juri005!'],
        ];

        foreach ($juries as $jury) {
            User::factory()->create([
                'name' => $jury['name'],
                'email' => $jury['email'],
                'password' => Hash::make($jury['password']),
            ]);
        }
    }
}
