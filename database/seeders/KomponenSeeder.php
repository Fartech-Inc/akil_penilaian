<?php

namespace Database\Seeders;

use App\Models\Komponen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $komponens = [
            [
                'kriteria_id' => 1,
                'name' => 'Minor',
                'score' => 1
            ],
            [
                'kriteria_id' => 1,
                'name' => 'Jelas dan terukur',
                'score' => 2
            ],
            [
                'kriteria_id' => 1,
                'name' => 'Dampak major',
                'score' => 3
            ],
            [
                'kriteria_id' => 1,
                'name' => 'Perubahan revolusioner',
                'score' => 4
            ],
            [
                'kriteria_id' => 2,
                'name' => 'Sedikit Bantuan',
                'score' => 1
            ],
            [
                'kriteria_id' => 2,
                'name' => 'Mendukung tugas tertentu',
                'score' => 2
            ],
            [
                'kriteria_id' => 2,
                'name' => 'Dukungan yang besar',
                'score' => 3
            ],
            [
                'kriteria_id' => 2,
                'name' => 'Mengubah pengalaman user',
                'score' => 4
            ],
            [
                'kriteria_id' => 3,
                'name' => 'Pengunaan teknologi basic',
                'score' => 1
            ],
            [
                'kriteria_id' => 3,
                'name' => 'Pengunaan complex analytics',
                'score' => 2
            ],
            [
                'kriteria_id' => 3,
                'name' => 'Advance analytics',
                'score' => 3
            ],
            [
                'kriteria_id' => 3,
                'name' => 'Cutting-edge technology',
                'score' => 4
            ],
            [
                'kriteria_id' => 4,
                'name' => 'Tidak tergambarkan',
                'score' => 1
            ],
            [
                'kriteria_id' => 4,
                'name' => 'change management bersifat dasar',
                'score' => 2
            ],
            [
                'kriteria_id' => 4,
                'name' => 'change management yang jelas',
                'score' => 3
            ],
            [
                'kriteria_id' => 4,
                'name' => 'Well define approach',
                'score' => 4
            ],
            [
                'kriteria_id' => 5,
                'name' => '',
                'score' => 1
            ],
            [
                'kriteria_id' => 5,
                'name' => '',
                'score' => 2
            ],
            [
                'kriteria_id' => 5,
                'name' => '',
                'score' => 3
            ],
            [
                'kriteria_id' => 5,
                'name' => '',
                'score' => 4
            ],
        ];

        foreach ($komponens as $komponen) {
            Komponen::create($komponen);
        }
    }
}
