<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'Professional Problem Solutions For Digital Products',
            'description' => 'At vero eos et accusamus etodio dignissimos ducimus praesentium voluptatum corrupti quos dolores quas molestias excepturi sint occaecati cupiditate provident qui officia deserunt mollitia animi, id est laborum et dolorum',
            'services' => json_encode([
                [
                    'id' => '348014b1-350a-4337-a520-8bb9753847b6',
                    'service' => 'Branding & Design'
                ],
                [
                    'id' => '18388230-28db-48d9-95c4-737708c402af',
                    'service' => 'Digital Marketing'
                ],
                [
                    'id' => '3a57fa00-0c0f-428c-82cd-0a4daf233576',
                    'service' => 'Web Development'
                ],
                [
                    'id' => '50abf026-5011-4526-a439-fa8c570fc9a1',
                    'service' => 'Product Design'
                ]
            ]),
            'image' => 'about/me-061c8d3d-1384-4cee-beea-017b5fd844a2.webp',
            'designation' => 'Experience Designer',
            'designation_image' => 'designation_image/btn-image1-7d69afc2-bee9-43f7-8246-41fc0cc2e3a5.webp',
            'testimonial_image' => 'testimonial_image/btn-image2-961f7af6-e4dd-4948-967e-50c69cdc2f64.webp',
            'testimonial_name' => 'Mark J. Collins',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
