<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabang')->insert([
            [
                'nama_cabang' => 'kost Soekarno Hatta',
                'lokasi_cabang' => 'Jl. Soekarno Hatta No. 1',
            ],
            [
                'nama_cabang' => 'kost Sigura Gura',
                'lokasi_cabang' => 'Jl. Sigura Gura  No. 1',
            ],
            [
                'nama_cabang' => 'kost Simanggi',
                'lokasi_cabang' => 'Jl. Simanggi No. 1',
            ]
        ]);
    }
}
