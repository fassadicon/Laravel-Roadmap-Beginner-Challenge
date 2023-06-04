<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Organizing Database Seeders in Laravel',
                'full_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dui vel ipsum cursus dictum sit amet id arcu. Phasellus vel convallis lorem. Mauris imperdiet augue sagittis eros tristique, ac laoreet erat porttitor. Maecenas a elit justo. Vestibulum dapibus enim id tempor varius. Suspendisse vel dapibus dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse eget dignissim nisl. Nunc magna mauris, faucibus et velit at, fermentum finibus nulla. Nunc tempor et ligula eget eleifend.',
                'category_id' => 1,
                'user_id' => 1
            ],
            [
                'title' => 'Laravel Migration 101',
                'full_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dui vel ipsum cursus dictum sit amet id arcu. Phasellus vel convallis lorem. Mauris imperdiet augue sagittis eros tristique, ac laoreet erat porttitor. Maecenas a elit justo. Vestibulum dapibus enim id tempor varius. Suspendisse vel dapibus dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse eget dignissim nisl. Nunc magna mauris, faucibus et velit at, fermentum finibus nulla. Nunc tempor et ligula eget eleifend.',
                'category_id' => 1,
                'user_id' => 1
            ],
        ];
        Article::insert($articles);
    }
}
