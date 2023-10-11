<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'hitung'
        ]);

        DB::table('categories')->insert([
            'name' => 'lingkungan'
        ]);

        DB::table('categories')->insert([
            'name' => 'arab'
        ]);

        DB::table('categories')->insert([
            'name' => 'puisi'
        ]);

        DB::table('categories')->insert([
            'name' => 'where'
        ]);
    }
}
