<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamar')->insert([
            //tiap kamar di kost soekarno hatta
            ['nama_kamar' => 'kamar 1 varian 1 kost Soekarno Hatta', 'status' => 'tidak tersedia', 'id_user' => 1, 'id_jenis' => 1],
            ['nama_kamar' => 'kamar 2 varian 1 kost Soekarno Hatta', 'status' => 'tersedia', 'id_user' => null,  'id_jenis' => 1],
            ['nama_kamar' => 'kamar 3 varian 1 kost Soekarno Hatta', 'status' => 'tersedia', 'id_user' => null,  'id_jenis' => 1],

            //tiap kamar di kost sigura gura
            ['nama_kamar' => 'kamar 1 varian  1 kost 1 Kost Sigura Gura', 'status' => 'tidak tersedia', 'id_user' => 2, 'id_jenis' => 2],
            ['nama_kamar' => 'kamar 2 varian  1 kost 1 Kost Sigura Gura', 'status' => 'tersedia', 'id_user' => null,  'id_jenis' => 2],
            ['nama_kamar' => 'kamar 3 varian  1 kost 1 Kost Sigura Gura', 'status' => 'tersedia', 'id_user' => null,  'id_jenis' => 2],

            //tiap kamar di kost simanggi
            ['nama_kamar' => 'kamar 1 varian  1 kost 1 Kost Simanggi', 'status' => 'tidak tersedia', 'id_user' => 3, 'id_jenis' => 3],
            ['nama_kamar' => 'kamar 2 varian  1 kost 1 Kost Simanggi', 'status' => 'tersedia', 'id_user' => null,  'id_jenis' => 3],
            ['nama_kamar' => 'kamar 3 varian  1 kost 1 Kost Simanggi', 'status' => 'tersedia', 'id_user' => null,  'id_jenis' => 3],
        ]);
    }
}
