<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Next Js',
                'image' => 'skills/01JT65Q4ZR2FDZ304N9ZAF49N5.png',
                'percentage' => '90',
            ],
            [
                'name' => 'React JS',
                'image' => 'skills/01JT65TRPH95KX1EV3HDHEGQ50.png',
                'percentage' => '92',
            ],
            [
                'name' => 'Tailwind CSS',
                'image' => 'skills/01JT65VFW7N0QG9HCAV9ETK3BQ.png',
                'percentage' => '95',
            ],
            [
                'name' => 'Typescript',
                'image' => 'skills/01JT65W5BT5HM4KYS6BFW84V5W.png',
                'percentage' => '80',
            ],
            [
                'name' => 'React Bootstrap',
                'image' => 'skills/01JT65XB32NA3V9HTJ1GH9PGRG.png',
                'percentage' => '75',
            ],
            [
                'name' => 'Figma',
                'image' => 'skills/01JT65Y42NK1EAGYK4X93YRPH5.png',
                'percentage' => '90',
            ],
            [
                'name' => 'Wordpress',
                'image' => 'skills/01JT65Z78RN93FT0GJ29SMG3VR.png',
                'percentage' => '85',
            ],
            [
                'name' => 'Laravel',
                'image' => 'skills/01JT660Z1GTC74E82MS5X07EQE.png',
                'percentage' => '86',
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
