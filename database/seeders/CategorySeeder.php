<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Frontend Development'],
            ['name' => 'Cyber Security'],
            ['name' => 'Mobile Development'],
            ['name' => 'Backend Development']
        ];
        Category::insert($categories);
    }
}
