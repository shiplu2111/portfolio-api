<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Alice Johnson',
                'image' => 'testimonials/author1-5475f9ea-fc1d-47fe-aaf0-b877be824e6f.webp',
                'company' => 'TechCorp',
                'designation' => 'CEO',
                'testimonial' => 'Working with this team has been an absolute pleasure. Their attention to detail and dedication to meeting our needs resulted in a product beyond our expectations. Highly recommend!',
            ],
            [
                'name' => 'Bob Smith',
                'image' => 'testimonials/author2-3f77f04a-5e68-4e8e-9a3f-5402125bd9ab.webp',
                'company' => 'DevWorks',
                'designation' => 'Lead Developer',
                'testimonial' => 'The team is professional and knowledgeable, always delivering top-notch solutions. Their ability to quickly adapt to our needs and execute efficiently has been invaluable.',
            ],
            [
                'name' => 'Carol Lee',
                'image' => 'testimonials/author1-5475f9ea-fc1d-47fe-aaf0-b877be824e6f.webp',
                'company' => 'StarTech',
                'designation' => 'CEO',
                'testimonial' => 'Working with this team has been an absolute pleasure. Their attention to detail and dedication to meeting our needs resulted in a product beyond our expectations. Highly recommend!',
            ],
            [
                'name' => 'Lee Smith',
                'image' => 'testimonials/author2-3f77f04a-5e68-4e8e-9a3f-5402125bd9ab.webp',
                'company' => 'Mysolusy',
                'designation' => 'Lead Developer',
                'testimonial' => 'The team is professional and knowledgeable, always delivering top-notch solutions. Their ability to quickly adapt to our needs and execute efficiently has been invaluable.',
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
