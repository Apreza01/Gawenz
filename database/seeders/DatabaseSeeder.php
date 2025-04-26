<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'nama'     => 'Team Gawenz',
            'email'    => 'admin@gmail.com',
            'jabatan'  => 'admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama'     => 'Deviana Pradhita',
            'email'    => 'deviana@gmail.com',
            'jabatan'  => 'karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama'     => 'Apreza Allanda',
            'email'    => 'apreza@gmail.com',
            'jabatan'  => 'karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama'     => 'Gawenz',
            'email'    => 'gawenz@gmail.com',
            'jabatan'  => 'karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        
    }
}
