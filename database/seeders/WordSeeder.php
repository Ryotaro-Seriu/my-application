<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('words')->insert([
            'english_word' => 'apple',
            'meaning' => 'りんご',
            'category' => 'noun',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('words')->insert([
            'english_word' => 'orange',
            'meaning' => 'オレンジ',
            'category' => 'noun',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);DB::table('words')->insert([
            'english_word' => 'grape',
            'meaning' => 'ぶどう',
            'category' => 'noun',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);DB::table('words')->insert([
            'english_word' => 'peach',
            'meaning' => 'モモ',
            'category' => 'noun',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);DB::table('words')->insert([
            'english_word' => 'strawberry',
            'meaning' => 'いちご',
            'category' => 'noun',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('words')->insert([
            'english_word' => 'play',
            'meaning' => '遊ぶ、演奏する',
            'category' => 'verb',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('words')->insert([
            'english_word' => 'get',
            'meaning' => '得る、獲得する',
            'category' => 'verb',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);DB::table('words')->insert([
            'english_word' => 'take',
            'meaning' => '手に取る',
            'category' => 'verb',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);DB::table('words')->insert([
            'english_word' => 'want',
            'meaning' => '欲しがる',
            'category' => 'verb',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);DB::table('words')->insert([
            'english_word' => 'listen',
            'meaning' => '聴く',
            'category' => 'verb',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        /*
        DB::table('words')->insert([
            'english_word' => 'cherry',
            'meaning' => 'さくらんぼ',
            'category' => 'noun',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
    }
}
