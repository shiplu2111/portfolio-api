<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Quinn William',
                'image' => 'hero/client-logo1-bd1167a6-fb4f-4ec6-854f-1516ea36dc7b.webp',
            ],
            [
                'name' => 'Cherokee Hendricks',
                'image' => 'hero/client-logo2-f8315b2f-76ff-40f5-9115-80a5ce9a4064.webp',
            ],
            [
                'name' => 'Ciaran Garcia',
                'image' => 'hero/client-logo3-effd3675-3f6a-4ecc-8287-b131a0f3945a.webp',
            ],
            [
                'name' => 'Zephania Gilbert',
                'image' => 'hero/client-logo4-1e5f7008-f835-43b2-8702-68f8ae9d3017.webp',
            ],
            [
                'name' => 'Ignacia Murphy',
                'image' => 'hero/client-logo5-43672643-851a-4ae0-aca0-a55f42ef66e5.webp',
            ],
            [
                'name' => 'Craig Marshall',
                'image' => 'hero/client-logo6-87a994ff-c1a1-464a-9c62-b86380529244.webp',
            ],
            [
                'name' => 'Jonah Wilkerson',
                'image' => 'hero/client-logo7-3c2c1cf2-b1c8-41db-a6e3-3ac80bc1a17a.webp',
            ],
            [
                'name' => 'Martha Booker',
                'image' => 'hero/client-logo8-7d3e26d1-18a8-4824-a89f-86fbb90a9465.webp',
            ],
            [
                'name' => 'Kibo Davis',
                'image' => 'hero/client-logo9-cef1fdf2-65d9-4e12-ac5c-7a0bb6cfc0a4.webp',
            ],
            [
                'name' => 'Jaden Hopkins',
                'image' => 'hero/client-logo10-b031a553-2ef2-4f71-bbdb-ddabe6ab98b9.webp',
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }

}
