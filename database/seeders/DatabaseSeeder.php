<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HeroSeeder::class,
            CounterSeeder::class,
            GeneralSettingSeeder::class,
            AboutSeeder::class,
            SkillSeeder::class,
            ServiceSeeder::class,
            PricingSeeder::class,
            ClientSeeder::class,
            ResumeSeeder::class,
            ProjectCategorySeeder::class,
            ProjectSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            HeaderTextSeeder::class,
        ]);

    }
}
