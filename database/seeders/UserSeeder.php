<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'  => 'Admin',
                'email' => 'adminppdb@gmail.com',
                'password'  => bcrypt('1234'),
                'role'  => 'admin'
            ],
            [
                'name'  => 'Siswa',
                'email' => 'siswa@gmail.com',
                'password'  => bcrypt('1234'),
                'role'  => 'siswa'
            ],
        ]);
    }
}
