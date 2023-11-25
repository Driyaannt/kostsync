<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            ["nama_fasilitas" => "Kamar mandi dalam, AC, Wifi"],
            ["nama_fasilitas" => "Kamar"],
            ["nama_fasilitas" => "Dapur bersama"],
        ]);
    }
}
