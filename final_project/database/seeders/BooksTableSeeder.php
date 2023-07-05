<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('books')->insert([
            'ISBN'=>'',
            'title'=>'',
            'subtitle'=>'',
            'author_name'=>'',
            'info'=>'',
            'image'=>'image/chukichi.jpg',
            'company'=>'',
            'genre_code'=>'',
            'year'=>''
        ]);

        DB::table('books')->insert([
            'ISBN'=>'',
            'title'=>'',
            'subtitle'=>'',
            'author_name'=>'',
            'info'=>'',
            'image'=>'./public/image/chukichi.jpg',
            'company'=>'',
            'genre_code'=>'',
            'year'=>''
        ]);

        DB::table('books')->insert([
            'ISBN'=>'',
            'title'=>'',
            'subtitle'=>'',
            'author_name'=>'',
            'info'=>'',
            'image'=>'image/chukichi.jpg',
            'company'=>'',
            'genre_code'=>'',
            'year'=>''
        ]);
    }
}
