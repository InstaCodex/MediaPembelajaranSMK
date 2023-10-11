<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' =>'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru Matematika',
            'email' => 'mtk@gmail.com',
            'password' => Hash::make('guru'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru Ipa',
            'email' => 'ipa@gmail.com',
            'password' => Hash::make('guru'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru Pai',
            'email' => 'pai@gmail.com',
            'password' => Hash::make('guru'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru Indonesia',
            'email' => 'indonesia@gmail.com',
            'password' => Hash::make('guru'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru Inggris',
            'email' => 'inggris@gmail.com',
            'password' => Hash::make('guru'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'faiz',
            'email' => 'faiz@gmail.com',
            'password' => Hash::make('siswa'),
            'role' =>'siswa'
        ]);

        DB::table('users')->insert([
            'name' => 'dwi',
            'email' => 'dwi@gmail.com',
            'password' => Hash::make('siswa'),
            'role' =>'siswa'
        ]);

        DB::table('users')->insert([
            'name' => 'saiful',
            'email' => 'saiful@gmail.com',
            'password' => Hash::make('siswa'),
            'role' =>'siswa'
        ]);

        DB::table('users')->insert([
            'name' => 'fikar',
            'email' => 'fikarmtkaa@gmail.com@gmail.com',
            'password' => Hash::make('siswa'),
            'role' =>'siswa'
        ]);
    }

}
