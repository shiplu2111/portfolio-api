<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectCategory;
class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Next js', 'slug' => 'next-js'],
            ['title' => 'React js', 'slug' => 'react-js'],
            ['title' => 'Tailwind CSS', 'slug' => 'tailwind-css'],
            ['title' => 'WordPress', 'slug' => 'wordpress'],
            ['title' => 'Laravel', 'slug' => 'laravel'],
        ];

        foreach ($data as $item) {
            ProjectCategory::create($item);
        }
    }
}
