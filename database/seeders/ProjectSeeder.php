<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Mobile Application Design',
            'slug' => 'mobile-application-design',
            'short_description' => '<h3>We Create digital Product For Business</h3><p>sSed ut perspiciatis unde omnis...</p>',
            'description' => '<p>Beatae vitae dicta sunt explicabo...</p>',
            'related_service' => [
                ['id' => '2fd2c110-cd0d-4119-af05-21c06844f14b', 'service' => 'Branding & Design'],
                ['id' => '3fd41468-edff-4843-82ae-eea5616f0878', 'service' => 'Web Development'],
                ['id' => '4c52e4f7-767f-4498-b0d9-7dee7296002a', 'service' => 'Mobile Apps Design'],
                ['id' => '6f530c96-ee56-44b1-bad3-49247f480fa0', 'service' => 'Graphics Design'],
                ['id' => 'f9e532e8-f3a9-4b58-9d67-43535dfd544a', 'service' => 'Digital Marketing'],
                ['id' => '4287c2ba-ea54-4bd7-b849-f8fe1bf05b8d', 'service' => 'Product Design'],
            ],
            'image' => 'projects/cover/01JT68FTFRYNTJB9F5H9XF3V8P.jpg',
            'category_id' => 4,
            'client' => 'X_Design Studio',
            'location' => 'Melbourne, Australia',
            'published_at' => 'September 25, 2023',
            'project_image_1' => 'projects/images/01JT68FTFTKHPPR9RSZ8PQP1WZ.jpg',
            'project_image_2' => 'projects/images/01JT68FTFVZYQPBJ4T07RS1DAP.jpg',
            'project_image_3' => 'projects/images/01JT68FTFX1TEJR43R8XECP41Z.jpg',
            'project_summery' => 'There are many variations of passages of Lorem Ipsum available...',
            'tags' => ['Design', 'Figma', 'Apps'],
        ]);
    }
}
