<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => 'Matematika',
            'category_id' => '2',
            'user_id' => '5',
            'dokumen' => '',
        ]);

        DB::table('books')->insert([
            'name' => 'Ipa',
            'category_id' => '3',
            'user_id' => '6',
            'dokumen' => '',
        ]);

        DB::table('books')->insert([
            'name' => 'Pai',
            'category_id' => '4',
            'user_id' => '7',
            'dokumen' => '',
        ]);

        DB::table('books')->insert([
            'name' => 'Bahasa Indonesia',
            'category_id' => '5',
            'user_id' => '8',
            'dokumen' => '',
        ]);

        DB::table('books')->insert([
            'name' => 'Bahasa Inggris',
            'category_id' => '6',
            'user_id' => '9',
            'dokumen' => '',
        ]);
    }
}
