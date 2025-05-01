<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeaderText;
class HeaderTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeaderText::create([
            'about_title' => 'Professional Problem Solutions For Digital Products',
            'about_sub_title' => 'At vero eos et accusamus etodio dignissimos ducimus praesentium voluptatum corrupti quos dolores quas molestias excepturi sint occaecati cupiditate provident qui officia deserunt mollitia animi, id est laborum et dolorum',
            'resume_title' => 'Real Problem Solutions Experience',
            'service_title' => 'My Special Service For your Business Development',
            'skill_title' => 'Let’s Explore Popular Skills & Experience',
            'project_title' => 'Explore My Popular Projects',
            'testimonial_title' => 'I’ve 1253+ Clients Feedback',
            'testimonial_sub_title' => 'Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis',
            'price_title' => 'Amazing Pricing For your Projects',
            'blog_title' => 'Latest News & Blog',
            'contact_title' => 'Let’s Talk For your Next Projects',
            'contact_sub_title' => 'Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis',
            'client_title' => 'I’ve 1253+ Global Clients & lot’s of Project Complete',
            'faq_title' => 'Professional Solutions For Your Digital Product Design and development',
            'education_title' => 'Education',
            'experiance_title' => 'Experiance',
            'certificate_title' => 'Certificate',
            'training_title' => 'Training',
            'social_title' => 'Social Media',
        ]);
    }
}
