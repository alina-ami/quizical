<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=> 1,
                'role_id' => 2,
                'level_id' => 1,
                'name' => 'Popescu Maria',
                'email' => 'mariapopescu@example.com',
                'password' => Hash::make('mariamaria'),
                'gender' => 'female',
                'age' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 2,
                'role_id' => 2,
                'level_id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('mariamaria'),
                'gender' => 'male',
                'age' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
