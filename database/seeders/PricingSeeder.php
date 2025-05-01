<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pricing;
class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Basic Plan',
                'sub_title' => 'Try Out Basic Plan Save 20%',
                'price' => '20',
                'currency_symbol' => '$',
                'duration' => 'Per Hour',
                'description' => 'Sed perspiciatis unde natus totam see rem aperiam eaque inventore',
                'service_include' => [
                    'Website Design',
                    'Mobile Apps Design',
                    'Product Design',
                ],
                'service_not_include' => [
                    'Digital Marketing',
                    'Custom Support',
                ],
            ],
            [
                'title' => 'Standard Plan',
                'sub_title' => 'Try Out Basic Plan Save 35%',
                'price' => '17',
                'currency_symbol' => '&',
                'duration' => 'Per Hour',
                'description' => 'Sed perspiciatis unde natus totam see rem aperiam eaque inventore',
                'service_include' => [
                    'Website Design',
                    'Mobile Apps Design',
                    'Product Design',
                    'Digital Marketing',
                    'Custom Support',
                ],
                'service_not_include' => [],
            ],
            [
                'title' => 'Business Plan',
                'sub_title' => 'Try Out Basic Plan Save 45%',
                'price' => '12',
                'currency_symbol' => '&',
                'duration' => 'Per Hour',
                'description' => 'Sed perspiciatis unde natus totam see rem aperiam eaque inventore',
                'service_include' => [
                    'Website Design',
                    'Mobile Apps Design',
                    'Product Design',
                    'Digital Marketing',
                    'Custom Support',
                ],
                'service_not_include' => [],
            ],
        ];

        foreach ($data as $item) {
            Pricing::create($item);
        }
    }

}
