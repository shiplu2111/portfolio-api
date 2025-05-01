<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'title' => 'Professional Solutions For Your Digital Product Design and development',
            'image_one' => 'about/faq-one-edfa4b3e-0a34-4f75-a080-fc5f70a3e7fa.webp',
            'image_two' => 'about/faq-two-dedfc2cd-8ef6-48a8-97e0-c8659cb0e186.webp',
            'faqs' => [
                [
                    'id' => 'cf39f235-669a-4f52-a7b7-c52917872969',
                    'question' => 'What services do you offer as a frontend web developer?',
                    'answer' => 'I specialize in building responsive and high-quality web applications using technologies like React.js, Next.js, and Tailwind CSS. I offer services such as converting Figma designs to HTML/JSX, creating custom user interfaces, and integrating backend APIs for seamless functionality.',
                ],
                [
                    'id' => '782b6465-c4aa-4e9c-8bff-be025c42fc46',
                    'question' => 'Do you offer custom designs or only Figma-to-HTML conversions?',
                    'answer' => 'Yes, I offer both custom designs and Figma-to-HTML/JSX conversions. If you have a design in mind or a Figma file, I can convert it into fully responsive, pixel-perfect HTML/JSX code. Alternatively, if you need a custom web design, I can work with you to create a tailor-made solution that fits your needs.',
                ],
                [
                    'id' => '54ee33da-346a-4e61-8ec8-7976b0f896b5',
                    'question' => 'How long does it take to complete a project?',
                    'answer' => 'The project timeline varies depending on the complexity and requirements. For a simple landing page or small feature, it may take a few days. Larger projects like complete websites or web apps typically take a few weeks. I always ensure clear communication and provide an estimated timeline before starting the project.',
                ],
                [
                    'id' => '72dd0450-7d1b-4e3f-b698-50fc25d7fcb1',
                    'question' => 'Can you help with both frontend and backend development?',
                    'answer' => 'Yes! While I specialize in frontend development with React.js, Next.js, and Tailwind CSS, I also have experience working with backend technologies like Laravel. If your project requires a complete full-stack solution, I can handle both the frontend and backend seamlessly to ensure smooth integration.',
                ],
            ],
        ]);
    }
}
