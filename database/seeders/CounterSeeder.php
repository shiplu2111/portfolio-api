<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Counter;
class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'text' => 'Years Of Experience',
                'value' => '13',
                'value_type' => '+',
            ],
            [
                'text' => 'Project Complete',
                'value' => '80',
                'value_type' => '+',
            ],
            [
                'text' => 'Client Satisfactions',
                'value' => '99',
                'value_type' => '%+',
            ]
        ];

        // Insert the data into the stats table
        foreach ($data as $stat) {
            Counter::create($stat);
        }
    }
}
