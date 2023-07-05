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
            'ISBN'=>'978-4295007807',
            'title'=>'スッキリわかるJava入門 第3版',
            'subtitle'=>'スッキリわかる入門シリーズ',
            'author_name'=>'中山清喬　国本大悟',
            'info'=>'発売から8年であっという間に総計40万部到達した大人気シリーズの原点。
            「どうして? 」「なぜそうなる? 」が必ずわかるJava入門書史上最強の定番書!
            読みやすさ、使いやすさをさらに磨いた増補改訂版登場!',
            'image'=>'image/chukichi.jpg',
            'company'=>'インプレス',
            'genre_code'=>'aa',
            'year'=>'2019'
        ]);

        DB::table('books')->insert([
            'ISBN'=>'978-4-06-510249-7',
            'title'=>'五等分の花嫁',
            'subtitle'=>'（１）',
            'author_name'=>'春場ねぎ',
            'info'=>'
            貧乏な生活を送る高校２年生・上杉風太郎のもとに、好条件の家庭教師アルバイトの話が舞い込む。
            ところが教え子はなんと同級生！！しかも五つ子だった！！
            全員美少女、だけど「落第寸前」「勉強嫌い」の問題児！ 風太郎は、超個性的な彼女たちを「卒業」まで導けるか──！？',
            'image'=>'image/chukichi.jpg',
            'company'=>'講談社',
            'genre_code'=>'bb',
            'year'=>'2017'
        ]);

        DB::table('books')->insert([
            'ISBN'=>'9784915512377',
            'title'=>'ハリー・ポッター',
            'subtitle'=>'賢者の石',
            'author_name'=>'Ｊ．Ｋ．ローリング',
            'info'=>'ハリー、おまえさんは魔法使いだしかも、そんじょそこいらの魔法使いじゃねぇ',
            'image'=>'image/chukichi.jpg',
            'company'=>'静山社',
            'genre_code'=>'',
            'year'=>'1999'
        ]);
    }
}
