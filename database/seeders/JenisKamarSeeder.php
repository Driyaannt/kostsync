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
            ['id_fasilitas' => 1, 'id_cabang' => 1, 'nama_jenis' => 'varian kamar 1 kost Soekarno Hatta', 'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu venenatis felis, egestas interdum justo. Donec sit amet orci malesuada, pellentesque est dapibus, interdum nisl. Duis interdum massa vitae eros interdum, sit amet viverra neque placerat. Quisque sit amet viverra mi. In nec dignissim leo, eget consequat neque. Etiam ac purus ex. Etiam a dui a purus rhoncus tincidunt et ornare risus. Vestibulum posuere, erat nec ornare iaculis, velit mauris lacinia ligula, nec semper erat nunc eu diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus rutrum dapibus ante. Sed velit est, suscipit quis velit non, venenatis viverra ligula. Sed in lacinia libero. Proin vitae sem molestie, venenatis velit maximus, accumsan arcu. Quisque eu arcu non lectus sollicitudin imperdiet nec at tellus. Sed in lobortis nibh. Morbi sed malesuada tellus.', 'harga' => 800000, 'gambar' => 'kamar-1.jpeg'],
            ['id_fasilitas' => 1, 'id_cabang' => 1, 'nama_jenis' => 'varian kamar 2 kost Soekarno Hatta', 'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu venenatis felis, egestas interdum justo. Donec sit amet orci malesuada, pellentesque est dapibus, interdum nisl. Duis interdum massa vitae eros interdum, sit amet viverra neque placerat. Quisque sit amet viverra mi. In nec dignissim leo, eget consequat neque. Etiam ac purus ex. Etiam a dui a purus rhoncus tincidunt et ornare risus. Vestibulum posuere, erat nec ornare iaculis, velit mauris lacinia ligula, nec semper erat nunc eu diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus rutrum dapibus ante. Sed velit est, suscipit quis velit non, venenatis viverra ligula. Sed in lacinia libero. Proin vitae sem molestie, venenatis velit maximus, accumsan arcu. Quisque eu arcu non lectus sollicitudin imperdiet nec at tellus. Sed in lobortis nibh. Morbi sed malesuada tellus.', 'harga' => 700000, 'gambar' => 'kamar-1.jpeg'],
            ['id_fasilitas' => 2, 'id_cabang' => 2, 'nama_jenis' => 'varian kamar 1 Kost Sigura Gura', 'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu venenatis felis, egestas interdum justo. Donec sit amet orci malesuada, pellentesque est dapibus, interdum nisl. Duis interdum massa vitae eros interdum, sit amet viverra neque placerat. Quisque sit amet viverra mi. In nec dignissim leo, eget consequat neque. Etiam ac purus ex. Etiam a dui a purus rhoncus tincidunt et ornare risus. Vestibulum posuere, erat nec ornare iaculis, velit mauris lacinia ligula, nec semper erat nunc eu diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus rutrum dapibus ante. Sed velit est, suscipit quis velit non, venenatis viverra ligula. Sed in lacinia libero. Proin vitae sem molestie, venenatis velit maximus, accumsan arcu. Quisque eu arcu non lectus sollicitudin imperdiet nec at tellus. Sed in lobortis nibh. Morbi sed malesuada tellus.', 'harga' => 500000, 'gambar' => 'kamar-1.jpeg'],
            ['id_fasilitas' => 3, 'id_cabang' => 3, 'nama_jenis' => 'varian kamar 1 Kost Simanggi', 'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu venenatis felis, egestas interdum justo. Donec sit amet orci malesuada, pellentesque est dapibus, interdum nisl. Duis interdum massa vitae eros interdum, sit amet viverra neque placerat. Quisque sit amet viverra mi. In nec dignissim leo, eget consequat neque. Etiam ac purus ex. Etiam a dui a purus rhoncus tincidunt et ornare risus. Vestibulum posuere, erat nec ornare iaculis, velit mauris lacinia ligula, nec semper erat nunc eu diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus rutrum dapibus ante. Sed velit est, suscipit quis velit non, venenatis viverra ligula. Sed in lacinia libero. Proin vitae sem molestie, venenatis velit maximus, accumsan arcu. Quisque eu arcu non lectus sollicitudin imperdiet nec at tellus. Sed in lobortis nibh. Morbi sed malesuada tellus.', 'harga' => 600000, 'gambar' => 'kamar-1.jpeg']
        ]);
    }
}
