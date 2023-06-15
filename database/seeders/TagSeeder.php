<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Laravel'],
            ['name' => 'PHP'],
            ['name' => 'ReactJS'],
            ['name' => 'Linux'],
            ['name' => 'NodeJS'],
            ['name' => 'API']
        ];
        Tag::insert($tags);
    }
}
