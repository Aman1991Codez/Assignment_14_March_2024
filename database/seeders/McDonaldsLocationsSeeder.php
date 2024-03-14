<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\McDonaldsLocation;

class McDonaldsLocationsSeeder extends Seeder
{
    public function run()
    {
        // Define dummy data for one record
        $locationData = [
            'title' => "McDonald's Times Square",
            'link' => "https://www.timessquarenyc.org/locations/mcdonalds",
            'domain' => "www.timessquarenyc.org",
            'displayed_link' => "https://www.timessquarenyc.org › locations › mcdonalds",
            'snippet' => "Classic, long-running fast-food chain known for its burgers, fries & shakes. HOURS Sun - Thu: 5:00 AM - 12:45 AM Fri - Sat: 24 Hours.",
            'prerender' => false,
            'block_position' => 9
        ];

        // Insert 50 records with slight variations
        for ($i = 0; $i < 50; $i++) {
            // Adjust title and link slightly for each record
            $locationData['title'] = "McDonald's Location " . ($i + 1);
            $locationData['link'] = "https://www.example.com/mcdonalds/location" . ($i + 1);

            // Create the record
            McDonaldsLocation::create($locationData);
        }
    }
}
