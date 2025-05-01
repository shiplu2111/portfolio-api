<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resume;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'start_year' => '2024',
                'end_year' => 'Present',
                'title' => 'Asultancy',
                'designation' => 'Senior Software Engineer',
                'website' => null,
            ],
            [
                'start_year' => '2022',
                'end_year' => '2024',
                'title' => 'DBDT',
                'designation' => 'Senior Web Developer',
                'website' => null,
            ],
            [
                'start_year' => '2019',
                'end_year' => '2022',
                'title' => 'Time Tech',
                'designation' => 'Web Developer',
                'website' => null,
            ],
            [
                'start_year' => '2017',
                'end_year' => '2019',
                'title' => 'Manob Communications',
                'designation' => 'Junior Web Developer',
                'website' => null,
            ],
        ];

        foreach ($data as $item) {
            Resume::create($item);
        }
    }
}
