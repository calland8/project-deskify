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
        $desks = [
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 1
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 2
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 3
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 4
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 5
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 6
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 1
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 8
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 9
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 10
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 11
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 12
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 13
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 14
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 15
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 16
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 17
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 18
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 19
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 20
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 21
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 22
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 23
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 24
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 25
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 26
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 27
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 28
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 29
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 30
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 31
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 32
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 33
            ],
            [
                'room' => 'HQ',
                'office_id' => 1,
                'desk_number' => 34
            ],
            [
                'room' => 'Meeting Room 1',
                'office_id' => 1,
                'desk_number' => 35
            ],
            [
                'room' => 'Meeting Room 2',
                'office_id' => 1,
                'desk_number' => 36
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 1
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 2
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 3
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 4
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 5
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 6
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 1
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 7
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 8
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 9
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 10
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 11
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 12
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 13
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 14
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 15
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 16
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 17
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 18
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 19
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 20
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 21
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 22
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 23
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 24
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 25
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 26
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 27
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 28
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 29
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 30
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 31
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 32
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 33
            ],
            [
                'room' => 'HQ',
                'office_id' => 2,
                'desk_number' => 34
            ],
            [
                'room' => 'Meeting Room 1',
                'office_id' => 2,
                'desk_number' => 35
            ],
            [
                'room' => 'Meeting Room 2',
                'office_id' => 2,
                'desk_number' => 36
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
