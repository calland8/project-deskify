<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Desks;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // desks objects for seeding purposes
        //array of set of desk objects
        $desks = [
            [
                'room' => 'meeting room 1',
                'office_id' => 1,
                'desk_number' => 1
            ],
            [
                'room' => 'meeting room 2',
                'office_id' => 2,
                'desk_number' => 2
            ],
            [
                'room' => 'meeting room 3',
                'office_id' => 1,
                'desk_number' => 3
            ],

        ];

        // looping through desks array and seeding
        foreach ($desks as $desk) {
            Desks::create(array(
                'room' => $desk['room'],
                'office_id' => $desk['office_id'],
                'desk_number' => $desk['desk_number']
            ));
        }
    }
}
