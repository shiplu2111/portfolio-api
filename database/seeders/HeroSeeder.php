<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;
class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'title' => 'Hello, i’m',
            'name' => 'Shiplu JS',
            'designation' => 'Frontend Engineer',
            'description' => 'We denounce with righteous indignation dislike demoralized by the charms of pleasure',
            'image' => 'hero/me-71b2d052-327e-4cf7-91a2-0930a70acea2.webp',
            'resume' => '01JSVYBNM07QAW8HJGKHBWA37W.pdf',
        ]);
    }
}
