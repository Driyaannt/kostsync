<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            //users
            ['id_role' => 1, 'id_cabang' => 1, 'nama' => 'user1', 'no_telepon' => '0812345678910', 'email' => 'user1@email.com', 'password' => Hash::make('password')],
            ['id_role' => 1, 'id_cabang' => 2, 'nama' => 'user2', 'no_telepon' => '0812345678911', 'email' => 'user2@email.com', 'password' => Hash::make('password')],
            ['id_role' => 1, 'id_cabang' => 3, 'nama' => 'user3', 'no_telepon' => '0812345678912', 'email' => 'user3@email.com', 'password' => Hash::make('password')],

            //admin
            ['id_role' => 2, 'id_cabang' => 1, 'nama' => 'admin1', 'no_telepon' => '0812345678913', 'email' => 'admin1@email.com', 'password' => Hash::make('password')],
            ['id_role' => 2, 'id_cabang' => 2, 'nama' => 'admin2', 'no_telepon' => '0812345678914', 'email' => 'admin2@email.com', 'password' => Hash::make('password')],
            ['id_role' => 2, 'id_cabang' => 3, 'nama' => 'admin3', 'no_telepon' => '0812345678915', 'email' => 'admin3@email.com', 'password' => Hash::make('password')],

            //superadmin
            ['id_role' => 3, 'id_cabang' => 1, 'nama' => 'superadmin1', 'no_telepon' => '0812345678916', 'email' => 'superadmin1@gmail.com', 'password' => Hash::make('password')],
        ]);
    }
}
