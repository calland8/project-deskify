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
                'date' => '2022-08-15',
                'taken' => 0,
                'desk_id' => 1
            ],
            [
                'date' => '2022-08-15',
                'taken' => 0,
                'desk_id' => 2
            ],
            [
                'date' => '2022-08-15',
                'taken' => 0,
                'desk_id' => 3
            ],
            [
                'date' => '2022-08-16',
                'taken' => 0,
                'desk_id' => 1
            ],
            [
                'date' => '2022-08-16',
                'taken' => 0,
                'desk_id' => 2
            ],
            [
                'date' => '2022-08-16',
                'taken' => 0,
                'desk_id' => 3
            ],
            [
                'date' => '2022-08-17',
                'taken' => 0,
                'desk_id' => 1
            ],
            [
                'date' => '2022-08-17',
                'taken' => 0,
                'desk_id' => 2
            ],
            [
                'date' => '2022-08-17',
                'taken' => 0,
                'desk_id' => 3
            ],
            [
                'date' => '2022-08-18',
                'taken' => 0,
                'desk_id' => 1
            ],
            [
                'date' => '2022-08-18',
                'taken' => 0,
                'desk_id' => 2
            ],
            [
                'date' => '2022-08-18',
                'taken' => 0,
                'desk_id' => 3
            ],
            [
                'date' => '2022-08-19',
                'taken' => 0,
                'desk_id' => 1
            ],
            [
                'date' => '2022-08-19',
                'taken' => 0,
                'desk_id' => 2
            ],
            [
                'date' => '2022-08-19',
                'taken' => 0,
                'desk_id' => 3
            ],
            [
                'date' => '2022-08-15',
                'taken' => 0,
                'desk_id' => 35
            ],
            [
                'date' => '2022-08-16',
                'taken' => 0,
                'desk_id' => 35
            ],
            [
                'date' => '2022-08-17',
                'taken' => 0,
                'desk_id' => 35
            ],
            [
                'date' => '2022-08-18',
                'taken' => 0,
                'desk_id' => 35
            ],
            [
                'date' => '2022-08-19',
                'taken' => 0,
                'desk_id' => 35
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
