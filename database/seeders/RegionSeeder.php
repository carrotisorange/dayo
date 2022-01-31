<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
                        'Ilocos Region', 
                        'Cagayan Valley', 
                        'Central Luzon', 
                        'Bicol', 
                        'Central Visayas', 
                        'Eastern Visayas',
                        'Western Visayas',
                        'Zamboanga Peninsula',
                        'Northern Mindanao',
                        'Davao',
                        'Calabarzon', 
                        'Cordillera Administrative Region',
                        'National Capital Region'
                    ];

        foreach($regions as $region) {
            \App\Models\Region::factory()->create([
                'region' => $region,
            ]);
        }  
    }
}
