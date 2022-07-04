<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        //creating role objects
        //insert admin to name column
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        //insert staff to name column 
        DB::table('roles')->insert([
            'name' => 'staff'
        ]);
    }
}
