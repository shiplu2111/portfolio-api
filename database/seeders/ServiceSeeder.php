<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Figma to React Conversion',
                'slug' => 'figma-to-react-conversion',
                'sub_title' => 'Convert Figma or design files into responsive React.js components with clean code.',
            ],
            [
                'title' => 'Next.js Website Development',
                'slug' => 'nextjs-website-development',
                'sub_title' => 'Build fast, SEO-friendly websites and apps using Next.js with modern features.',
            ],
            [
                'title' => 'Tailwind CSS UI Design',
                'slug' => 'tailwind-css-ui-design',
                'sub_title' => 'Create beautiful, responsive UI designs using Tailwind CSS utility-first approach.',
            ],
            [
                'title' => 'React.js Web Application',
                'slug' => 'reactjs-web-application',
                'sub_title' => 'Develop interactive and scalable SPAs using React.js and modern JavaScript practices.',
            ],
            [
                'title' => 'TypeScript Integration',
                'slug' => 'typescript-integration',
                'sub_title' => 'Add strong typing and scalable code architecture to your React or Next.js projects.',
            ],
            [
                'title' => 'React Bootstrap UI Development',
                'slug' => 'react-bootstrap-ui-development',
                'sub_title' => 'Build consistent and responsive UIs quickly using React Bootstrap components.',
            ],
            [
                'title' => 'WordPress Frontend Customization',
                'slug' => 'wordpress-frontend-customization',
                'sub_title' => 'Customize or build WordPress themes with modern frontend technologies.',
            ],
            [
                'title' => 'Laravel Frontend Integration',
                'slug' => 'laravel-frontend-integration',
                'sub_title' => 'Integrate frontend (React/Tailwind) with Laravel backend for dynamic applications.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
