<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating office object array to seed db
        $offices = [
            [
                'name' => 'main office',
                'location' => 'craigavon',
                'layout' => '/Users/callanduffin/Projects/project-deskify/public/extras/main-office.png'
            ],
            [
                'name' => 'satellite',
                'location' => 'dublin',
                'layout' => '/Users/callanduffin/Projects/project-deskify/public/extras/logo.png'
            ]

        ];

        // looping through offices array and seeding
        foreach ($offices as $office) {
            Office::create(array(
                'name' => $office['name'],
                'location' => $office['location'],
                'layout' => $office['layout']
            ));
        }
    }
}
