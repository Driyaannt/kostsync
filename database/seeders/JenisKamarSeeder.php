<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kamar')->insert([
            ['id_fasilitas' => 1, 'id_cabang' => 1, 'nama_jenis' => 'varian kamar 1 kost Soekarno Hatta', 'harga' => 800000, 'gambar' => 'bg_1.jpg'],
            ['id_fasilitas' => 2, 'id_cabang' => 2, 'nama_jenis' => 'varian kamar 1 Kost Sigura Gura', 'harga' => 500000, 'gambar' => 'bg_1.jpg'],
            ['id_fasilitas' => 3, 'id_cabang' => 3, 'nama_jenis' => 'varian kamar 1 Kost Simanggi', 'harga' => 600000, 'gambar' => 'bg_1.jpg']
        ]);
    }
}
