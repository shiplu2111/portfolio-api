<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;
class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'site_name' => 'Shiplu JS',
            'logo' =>  'site/My LOGO-16018273-0be2-4e8a-abe3-cc12435652b2.png',
            'favicon' =>  'site/My Fev ICon (1)-d1365f59-02a2-4085-9be9-768d6575ed4b.png',
            'preloader' =>  'site/My Fev ICon (1)-de17cac9-6eff-4ae1-953c-34fc0e0498b9.png',
            'email' => 'me@shiplujs.com',
            'website_url' => 'https://shiplujs.com/',
            'phone' => '01711002919',
            'address' => 'Babor road, Block B, Mohammadpur',
            'city' => 'Dhaka',
            'district' => 'Dhaka',
            'country' => 'Bangladesh',
            'postal_code' => '1205',
            'copyright' => '@ Shiplujs 2025 Shiplu. All rights reserved.',

        ];

        // Insert the data into the sites table
        GeneralSetting::create($data);
    }

}
