<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'text' => 'Ceci est un texte',
                'title' => 'Title',
                'user_id' => 1,
            ],
            [
                'text' => 'Ceci est un texte',
                'title' => 'Title',
                'user_id' => 1,
            ],
            [
                'text' => 'Ceci est un texte',
                'title' => 'Title',
                'user_id' => 3,
            ],
            [
                'text' => 'Ceci est un texte',
                'title' => 'test',
                'user_id' => 2,
            ],
            [
                'text' => 'Ceci est un texte',
                'title' => 'test',
                'user_id' => 5,
            ],
            [
                'text' => 'Ceci est un texte',
                'title' => 'test',
                'user_id' => 5,
            ]
        ]);
    }
}
