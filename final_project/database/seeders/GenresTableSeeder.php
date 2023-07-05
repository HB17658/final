<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('genres')->insert([
            'genres_name'=>'勉強',
            'genre_code'=>'aa'
        ]);

        DB::table('genres')->insert([
            'genres_name'=>'ラブコメ',
            'genre_code'=>'bb'
        ]);

        DB::table('genres')->insert([
            'genres_name'=>'ファンタジー',
            'genre_code'=>'cc'
        ]);
    }
}
