<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['article_id' => 1, 'tag_id' => 1],
            ['article_id' => 1, 'tag_id' => 2],
            ['article_id' => 2, 'tag_id' => 1],
        ];

        DB::table('article_tag')->insert($data);
    }
}
