<?php

namespace Database\Seeders;

use App\Models\Timeslot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed example timeslots into the database 
        $timeslots = [
            [
                'date' => '2022-08-01',
                'taken' => 0,
                'desk_id' => 1
            ],
            [
                'date' => '2022-08-01',
                'taken' => 0,
                'desk_id' => 2
            ],
            [
                'date' => '2022-08-01',
                'taken' => 0,
                'desk_id' => 3
            ],

        ];

        // looping through desks array and seeding
        foreach ($timeslots as $timeslot) {
            Timeslot::create(array(
                'date' => $timeslot['date'],
                'desk_id' => $timeslot['desk_id'],
                'taken' => $timeslot['taken']
            ));
        }
    }
}
